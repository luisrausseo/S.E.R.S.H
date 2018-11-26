from chatterbot import ChatBot
from chatterbot.trainers import ChatterBotCorpusTrainer

sersh_bot = ChatBot("SERSH",
                       storage_adapter="chatterbot.storage.SQLStorageAdapter",
                       database_uri="mysql+pymysql://sershadmin:1gosgRIvWXAYglh6@ttu295439.ttu.edu/sersh")

trainer = ChatterBotCorpusTrainer(sersh_bot)
trainer.train("chatterbot.corpus.english")
