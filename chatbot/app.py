#!/Python/python.exe
from flask import Flask, render_template, request
from chatterbot import ChatBot
from chatterbot.trainers import ChatterBotCorpusTrainer

app = Flask(__name__)

sersh_bot = ChatBot("SERSH",
                       storage_adapter="chatterbot.storage.SQLStorageAdapter",
                       database_uri="mysql+pymysql://sershadmin:1gosgRIvWXAYglh6@ttu295439.ttu.edu:3306/sersh")

@app.route("/")
def home():
    return render_template("index.html")

@app.route("/get")
def get_bot_response():
	userText = request.args.get('msg')
	return str(sersh_bot.get_response(userText))

if __name__ == "__main__":
    app.run()
