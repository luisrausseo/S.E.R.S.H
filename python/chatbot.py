from chatterbot import ChatBot
from chatterbot.trainers import ChatterBotCorpusTrainer

##CONVERSATION = 'example_learning_conversation'

# Create a new instance of a ChatBot
bot = ChatBot(
    "SERSH",
    storage_adapter="chatterbot.storage.SQLStorageAdapter",
    logic_adapters=[
        {
            "import_path": "chatterbot.logic.BestMatch",
            "statement_comparison_function": "chatterbot.comparisons.levenshtein_distance",
            "response_selection_method": "chatterbot.response_selection.get_most_frequent_response"
        },
        {
            "import_path": "chatterbot.logic.LowConfidenceAdapter",
            "threshold": 0.65,
            "default_response": "I am sorry, but I do not understand."
        }
##        "chatterbot.logic.TimeLogicAdapter"
    ],
    input_adapter="chatterbot.input.TerminalAdapter",
    output_adapter="chatterbot.output.TerminalAdapter",
    database="./database.db"
)

trainer = ChatterBotCorpusTrainer(bot.storage)

#trainer.train("chatterbot.corpus.english")

##def get_feedback():
##
##    text = input()
##
##    if 'yes' in text.lower():
##        return False
##    elif 'no' in text.lower():
##        return True
##    else:
##        print('Please type either "Yes" or "No"')
##        return get_feedback()


print("Type something to begin...")

# The following loop will execute each time the user enters input
while True:
    try:
        bot_input = bot.get_response(None)
##        input_statement = bot.input.process_input()
##        statement, response = bot.generate_response(
##            input_statement,
##            CONVERSATION
##        )
##
##        bot.output.process_response(response)
##        print('\n Is "{}" a coherent response to "{}"? \n'.format(response, input_statement))
##        if get_feedback():
##            print("please input the correct one")
##            response1 = bot.input.process_input()
##            bot.learn_response(CONVERSATION, response1, input_statement)
##            print("Responses added to bot!")

    # Press ctrl-c or ctrl-d on the keyboard to exit
    except (KeyboardInterrupt, EOFError, SystemExit):
        break
