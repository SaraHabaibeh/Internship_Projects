import csv
"Importing text files and exporting them as CSV files"

r = open('new_sample9.txt', 'r', encoding = 'utf-8')
f = open('new_sample1.csv', 'a', encoding='utf-8')

for line in r:
     f.write(line.replace('"', '').replace(' '*10,'').replace(' '*4,'').replace(' '*5,'').replace('\t','').replace(' '*3, '').replace(' '*2,'').replace(',,,,','').replace(',,,,',''))

r.close()
f.close()

"Using Pandas"

# import pandas as pd
# -*- coding: utf-8 -*-
#count = 0
# r = open('sample.txt', 'r', encoding="utf-8")
# f = open('new_sample.csv', 'a',encoding = 'utf-8')
# for line in r:
#     f.write(line.replace(' '*9,',').replace(' '*2, '').replace('"', '').replace(' '*5, ''))
#     f.write(line.strip())
   
# # read_file = pd.read_csv (r'C:/wamp64/www/stock_managment/jawwal/new_sample.txt')
# #read_file.to_csv (r'C:/wamp64/www/stock_managment/jawwal/new_sample.csv', index=None)
# r.close()
# f.close()

"Using Functions"
# file = open("sample.txt", "r", encoding = 'utf-8')
# file2 = open('nice.csv', 'a', encoding = 'utf-8')

# def counter(file):
#     file = open("sample.txt", "r", encoding = 'utf-8')
#     count = 0
#     for line in file:
#         char = file.read(1)
#         if char == " ":
#             count+=1
#     return count

# file = open("sample.txt", "r", encoding = 'utf-8')
# file2 = open('nice1.csv', 'a', encoding = 'utf-8')
# for line in file:
#     if counter(file)>1:
#         file2.write(line.strip(' '))


# while True:
#     count = 0
#     # this will read each character
#     # and store in char
#     char = file.read(1)
      
#     if char == " ":
#         count += 1
#         if count >1:
#             char.strip(' ')
#     if not char:
#         break
#     file2.write(char)


        
