import mysql.connector
import configparser

def sqlConnect(sqlCommand):
    config = configparser.ConfigParser()
    config.read('config.ini')
    conn = mysql.connector.connect(
      host=config['DEFAULT']['server'],
      user=config['DEFAULT']['user'],
      passwd=config['DEFAULT']['password'],
      database=config['DEFAULT']['database']
    )
    mycursor = conn.cursor()
    mycursor.execute(sqlCommand)
    myresult = mycursor.fetchall()
    mycursor.close()
    conn.close()
    return myresult

###____MAIN_____
sqlCommand = "SELECT * FROM test"
query = sqlConnect(sqlCommand)
for x in query:
    print(x)
