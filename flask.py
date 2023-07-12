import io
from flask import Flask, render_template, request
import tensorflow as tf
import numpy as np
from PIL import Image
from io import BytesIO
app = Flask(__name__)

# Load Teachable model
model = tf.keras.models.load_model('path/to/model.h5')

# Define route for image classification
@app.route('/registerstion.php', methods=['POST'])
def classify():
    # Get image data from request
    img_data = request.files['image'].read()
    img = Image.open(io.BytesIO(img_data))

    # Preprocess image
    img = img.resize((224, 224))
    img_array = np.array(img) / 255.0
    img_array = np.expand_dims(img_array, axis=0)

    # Make prediction
    prediction = model.predict(img_array)

    # Return prediction
    return str(prediction)

# Define homepage
@app.route('/')
def home():
    return render_template('loginpage.html')

if __name__ == '__main__':
    app.run(debug=True)
