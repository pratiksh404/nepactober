from tkinter import *
from tkinter.ttk import * 
import requests
from bs4 import BeautifulSoup

URL1 = "https://www.worldometers.info/coronavirus/"

headers = {'User-Agent': 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/80.0.3987.149 Safari/537.36'}

page = requests.get(URL1, headers=headers)

soup = BeautifulSoup(page.content,'html.parser')


window = Tk()
window.title("COVID-19")
window.iconbitmap("covid.ico")
# window.geometry("500x300")


Header = ["Country","Total cases","New Cases","Total Deaths","New Deaths","Total Recovered","Active Cases","Critical","Total cases per Million","Total Deathes per Million"]
TotalHeader = ["Total Cases","Total Deaths","Total Recovered"]
HeaderColor = ["Black","#c9001b","#00c918"]

WelcomeFrame =Frame(window)
PrecFrame =Frame(window)
LabelFame = Frame(window)
InputFrame = Frame(window)
DataFrame = Frame(window)
TotalFrame = Frame(window)
FooterFrame = Frame(window)

list=[]
total=[]

# !_--------------Welcome functions--------------_! #


def welcome(l1):
    l1.destroy()
    prec()

def prec():
    WelcomeFrame.grid_forget()

    p1=Label(WelcomeFrame,text="Corona Go")
    p1.config(font=("PrincetownD 30"))
    p1.grid(row=0,column=0,padx=40)    
    p1=Label(WelcomeFrame,text="Go Corona",foreground="#9c1c2a")
    p1.config(font=("PrincetownD 30"))
    p1.grid(row=1,column=0,padx=40)
    WelcomeFrame.grid(row=0,column=0,padx=70,pady=70)

    p1.after(2000,main)

def main():
    for widget in WelcomeFrame.winfo_children():
        widget.destroy()
        WelcomeFrame.grid_forget()
    sol()

def sol():  
    LabelFame.grid(row=0,column=0,padx=0,pady=5)
    TotalFrame.grid(row=1,column=0,padx=50,pady=7)
    InputFrame.grid(row=2,column=0,padx=0,pady=7)
    FooterFrame.grid(row=4,column=0,padx=0,pady=7)

    

# !_--------------Welcome functions--------------_! #

def showResult(event):
    if DataFrame:
        for widget in DataFrame.winfo_children():
            widget.destroy()
            DataFrame.grid_forget()
            del list[:]
    name = country.get()
    countryName = soup.find("td",text=name.capitalize())
    if countryName:
        detail = countryName.find_parent()
        i=0
        for td in detail.findAll("td"):
            if i<10:
                list.append(td.get_text())
                i+=1
        printResult()
    else:
        label = Label(DataFrame, text="Country not found")
        label.config(font=('calibri 12 italic'),foreground = 'red')
        label.pack()
        DataFrame.grid(row=3,column=0,pady=10)

def printResult():
    #Data
    tab = Frame(DataFrame)
    tab.grid_forget()
    tab.pack(fill="both")

    for row in range(10):
        for col in range(3):
            if col==0:
                label=Label(tab,text=Header[row])
                label.config(font=("K2D",14))
                label.grid(row=row,column=col,sticky=W)
    
            elif col==1:
                label=Label(tab,text=":")
                label.config(font=("K2D",14))
                label.grid(row=row,column=col)

            else:
                if list[row]=="":
                    label=Label(tab,text="0")
                else:
                    label=Label(tab,text=list[row])
                label.config(font=("K2D",14))
                label.grid(row=row,column=col,sticky=W)
    DataFrame.grid(row=3,column=0,pady=10)

 
# style for button
style = Style() 
style.configure('W.TButton', font =('calibri', 13), foreground = 'black') 

#Input

label=Label(LabelFame,text="Corona Virus",foreground="#7d131f")
label.config(font=("K2D 20 bold"))
label.pack(fill="both")

title = Label(InputFrame,text="Search by Country Name: ")
title.config(font=("Calibri",10,"italic"),width=0)
country = Entry(InputFrame,font=("Calibri",12),width=44)
country.bind("<Return>", showResult)
submit = Button(InputFrame,text="Search", style = 'W.TButton',width=39,command=lambda: showResult(1))
footer = Label(FooterFrame,text="Birat Siku")
footer.config(font=("Calibri 9 italic"),foreground="#020647")

title.grid(row=0,column=0,pady=2,sticky=W)
country.grid(row=1,column=0,pady=2)
submit.grid(row=2,column=0,pady=2)
footer.grid(row=0,column=0,pady=1)

#Total Count
# Detail
for one in soup.findAll(id="maincounter-wrap"):
    total.append(one.find("span").get_text())

for row in range(2):
    for col in range(3):
        if row == 0:
            label = Label(TotalFrame,text=TotalHeader[col])
            label.config(font=("Calibri",13,"bold"),foreground=HeaderColor[col])
            label.grid(row=row,column=col,padx=5,pady=1)
        else:
            label = Label(TotalFrame,text=total[col])
            label.config(font=("Calibri",13))
            label.grid(row=row,column=col,padx=5,pady=1)

#_---------------- Welcome ---------------_! #

l1 = Label(WelcomeFrame, text="Stay Home")
l1.config(font=("PrincetownD 40"))
l1.grid(row=0,column=0)

WelcomeFrame.grid(row=0,column=0,padx=70,pady=84)
l1.after(1000,lambda: welcome(l1))

#_---------------- Welcome ---------------_! #

mainloop()