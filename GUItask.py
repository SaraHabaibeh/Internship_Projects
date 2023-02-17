from tkinter import *
from tkinter import filedialog
from tkinter import messagebox
from tkinter.filedialog import asksaveasfilename
from xml.etree import ElementTree as ET
import os

window = Tk()
window.title("Template Paster Demo")
CurrentDirectory=os.getcwd()

#initializing labels
Label3 = Label(window, text = " ")
Label4 = Label(window, text = " ")
Label5= Label(window, text = " ")
Label6 = Label(window, text = " ")
Label7 = Label(window, text = " ")
Label8= Label(window, text = " ")
Label9 = Label(window, text = " ")
Label0 = Label(window, text = " ")
Label11= Label(window, text = " ")
Label12 = Label(window, text = "Parameters")
Label13 = Label(window, text = "Template")
Label14= Label(window, text = " ")
Label15= Label(window, text = " ")
Label16 = Label(window, text = "Output Files")
#positioning labels
Label3.grid(row = 2, column = 3)
Label4.grid(row = 3, column = 3)
Label5.grid(row = 4, column = 3)
Label6.grid(row = 0, column = 0)
Label7.grid(row = 0, column = 1)
Label8.grid(row = 0, column = 2)
Label9.grid(row = 5, column = 4)
Label0.grid(row = 5, column = 5)
Label11.grid(row = 5, column = 6)
Label12.grid(row = 4, column = 2)
Label13.grid(row = 4, column = 7)
Label14.grid(row = 7, column = 9)
Label15.grid(row = 7, column = 11)
Label16.grid(row = 4, column = 13)

#defining functions
# def Open():
#     file = filedialog.askopenfilename(initialdir=CurrentDirectory, title = "Open Template", filetypes=(("XML Files", "*.xml"), ))
#     file = open(file, 'r', encoding='UTF-8')
#     J = file.read()
#     Input_1.insert(END,J)
#     file.close()

# def Data():
#     data = filedialog.askopenfilename(initialdir=CurrentDirectory, title ="Open Parameter Values", filetypes=(("CSV Files", "*.csv"), ) )
#     data = open(data, 'r', encoding = 'UTF-8')
#     I = data.read()
#     Input_2.insert(END, I)
#     data.close()

def Task():
    """ This Function uses an XML template and replaces certain variables (parameters)
    with data in a csv file :)"""
    CSV_file = filedialog.askopenfilename(initialdir=CurrentDirectory, title = "Open Data", filetypes=(("CSV Files", "*.csv"), ))
    CSV_File = open(CSV_file, 'r', encoding = 'UTF-8')
    Input_1.insert(END,CSV_File.read())
    file = filedialog.askopenfilename(initialdir=CurrentDirectory, title = "Open Template", filetypes=(("XML Files", "*.xml"), ))
    File = open(file,'r', encoding = 'UTF-8')
    Input_2.insert(END, File.read())
    fname = asksaveasfilename(initialdir=CurrentDirectory,filetypes=(("XML Files", "*.XML"), ("XML Files", "*.xml") ))
    count = 0
    for line in CSV_File:
      x = line.split(',')
      count +=1
      tree = ET.parse(File)
      root = tree.getroot()
      for node in root.getiterator():
         if node.attrib.get('val')=='X1':
            node.attrib['val'] = x[0]
         if node.attrib.get('val') == 'X2':
            node.attrib['val'] = x[1]
         if node.attrib.get('val') == 'X3':
            node.attrib['val'] = x[2]
         if node.attrib.get('val') == 'X4':
            node.attrib['val'] = x[3]
         if node.attrib.get('val') == 'X5':
            node.attrib['val'] = x[4]
         if node.attrib.get('val') == 'X6':
            node.attrib['val'] = x[5]
         if node.attrib.get('val') == 'X7':
            node.attrib['val'] = x[6]
         if node.attrib.get('val') == 'X8':
            node.attrib['val'] = x[7] 
         if node.attrib.get('val') == 'X9':
            node.attrib['val'] = x[8]
         if node.attrib.get('val') == 'X10':
            node.attrib['val'] = x[9]
         if node.attrib.get('val') == 'X11':
            node.attrib['val'] = x[10]
         if node.attrib.get('val') == 'X12':
            node.attrib['val'] = x[11]
         with open(fname +str(count)+".xml", 'wb') as f: 
            tree.write(f)
            f.close()
    messagebox.showinfo("Template Paster", "Files Completed!")
      
def Display():
   Display = filedialog.askopenfilename(initialdir=CurrentDirectory, title ="Open Output Files", filetypes=(("XML Files", "*.xml"), ) )
   Display = open(Display, 'r', encoding = 'UTF-8')
   F= Display.read()
   Input_3.insert(END,F)
   Display.close()

#Initializing and positioning text input
Input_1= Text(window, width=60, borderwidth=5)
Input_1.grid(row = 5, column = 1, columnspan=4)
Input_2= Text(window, width=30, borderwidth=5)
Input_2.grid(row = 5, column = 7, columnspan=4)
Input_3= Text(window, width=30, borderwidth=5)
Input_3.grid(row = 5, column = 13, columnspan=4)
#Initializing and positioning buttons
button_open = Button(window, text = "Open Template", padx = 30, pady = 10, bg = "white")
button_open.grid(row = 7, column = 2)
button_open1 = Button(window, text = "Open Data", padx = 30, pady = 10, bg = "white")
button_open1.grid(row = 7, column = 7)
button_execute = Button(window, text = "Execute", padx = 30, pady = 10, command=Task, bg = "white")
button_execute.grid(row = 7, column = 11)
button_Display = Button(window, text = "Display Output", padx = 30, pady = 10, command=Display, bg = "white")
button_Display.grid(row = 7, column = 14)
#running GUI
window.mainloop()