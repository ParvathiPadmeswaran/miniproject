import tensorflow as tf
import sys
import os
import pyttsx3


# Disable tensorflow compilation warnings
os.environ['TF_CPP_MIN_LOG_LEVEL']='2'
import tensorflow as tf

image_path = "input\\input.jpg"

# Read the image_data
image_data = tf.gfile.FastGFile(image_path, 'rb').read()


# Loads label file, strips off carriage return
label_lines = [line.rstrip() for line
                   in tf.gfile.GFile("logs/output_labels.txt")]

# Unpersists graph from file
with tf.gfile.FastGFile("logs/output_graph.pb", 'rb') as f:
    graph_def = tf.GraphDef()
    graph_def.ParseFromString(f.read())
    _ = tf.import_graph_def(graph_def, name='')

out=""
max=0
with tf.Session() as sess:
	# Feed the image_data as input to the graph and get first prediction
	softmax_tensor = sess.graph.get_tensor_by_name('final_result:0')

	predictions = sess.run(softmax_tensor, \
				{'DecodeJpeg/contents:0': image_data})

    # Sort to show labels of first prediction in order of confidence
	top_k = predictions[0].argsort()[-len(predictions[0]):][::-1]
	
	
	for node_id in top_k:
		human_string = label_lines[node_id]
		score = predictions[0][node_id]
		print('%s (score = %.5f)' % (human_string, score))
		if max<score:
			max=score
			out=str(human_string)
		print(score)
		print(human_string)
print("score",max)
print("output:",out)


engine = pyttsx3.init()
#engine.say("I will speak this text")
engine.save_to_file("the predicted sign is   " + out, 'test.mp3')
engine.runAndWait()
engine.stop()

file=open("out.txt","w")
file.write(out)
file.close()