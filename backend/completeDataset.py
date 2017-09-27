import mysql.connector
import pandas as pd
import numpy as np 
import statsmodels.api as sm
import math
import sys
import os, subprocess, re
import urllib,json
from sqlalchemy import create_engine 


dataset = 'prediction1'
target = 'prediction1complete'

cnx = mysql.connector.connect(user='ethgas', password='station', host='127.0.0.1', database='tx')
cursor = cnx.cursor()

query = ("SELECT {0}.*, minedtransactions.minedBlock, minedtransactions.gasused FROM {0} LEFT JOIN minedtransactions ON {0}.txHash = minedtransactions.txHash" .format(dataset))
engine = create_engine('mysql+mysqlconnector://ethgas:station@127.0.0.1:3306/tx', echo=False)

cursor.execute(query)
head = cursor.column_names
predictData = pd.DataFrame(cursor.fetchall())
predictData.columns = head

compStart = 0
compEnd = 20000
ints = int(len(predictData)/20000)
print ('ints ' + str(ints)) 
for x in range (0, ints):
    predict1 = pd.DataFrame(predictData.iloc[compStart:compEnd, :])
    predict1.to_sql(con=engine, name = target, if_exists='append', index=True)
    compStart = compStart + 20000
    compEnd = compEnd + 20000
print('compEnd ' + str(compEnd))
predict1 = pd.DataFrame(predictData.iloc[compStart:, :])
predict1.to_sql(con=engine, name = target, if_exists='append', index=True) 

cursor.close