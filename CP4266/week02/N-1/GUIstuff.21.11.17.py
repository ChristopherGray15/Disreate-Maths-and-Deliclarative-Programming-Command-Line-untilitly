'''
import tkinter

class Label_GUI:

    def __init__(self):

        self.mw = tkinter.Tk()
        self.label1 = tkinter.Label(self.mw, text = "Hello World")
        self.label1.pack()
        tkinter.mainloop()


        self.label1 = tkinter.Label(self.mw, text = "Hello World")
        self.label2 = tkinter.Label(self.mw, text = "Hello Again")
        self.label1.pack(side = "left")
        self.label2.pack(side = "top")
        
        tkinter.mainloop()


    def function_1(self):
        print("Button 1 is clicked")

    def function_2(self):
        print("Button 2 is clicked")

Label_GUI()
'''
'''
import tkinter

class Entry_GUI:

    def __init__(self):

        self.mw = tkinter.Tk()
        self.lab_var = tkinter.StringVar()
        self.label3 = tkinter.Label(self.mw, textvariable = self.lab_var)
        self.label1 = tkinter.Label(self.mw, text = "Enter height")
        self.entry1 = tkinter.Entry(self.mw, width = 15)
        self.button1 = tkinter.Button(self.mw, text = "Calulate_BMI", command = self.get_value)
        self.label2 = tkinter.Label(self.mw, text = "Enter weight")
        self.entry2 = tkinter.Entry(self.mw, width = 15)
        self.lab_var.set("")
        self.label1.pack(side="top")
        self.entry1.pack(side="top")
        self.label2.pack(side="top")
        self.entry2.pack(side="top")
        self.button1.pack(side="top")
        self.label3.pack(side="top")
        
        tkinter.mainloop()
                                    
    def get_value(self):
        val = float(self.entry1.get())
        val1 = float(self.entry2.get())
        BMI= val1 / (val**2)
        print(BMI)
        self.lab_var.set("%2.6f" %BMI)

        
Entry_GUI()
'''

    
import tkinter

class Grid_GUI:

    def __init__(self):
        self.mw = tkinter.Tk()

        lb1 = tkinter.Label(self.mw, text="First")
        lb2 = tkinter.Label(self.mw, text="Second")

        lb1.grid(row=0, column=0)
        lb2.grid(row=1, column=0)

        e1 =tkinter.Entry(self.mw)
        e2 =tkinter.Entry(self.mw)
        
        e1.grid(row=0, column=1)
        e2.grid(row=1, column=1)

        bt1 = tkinter.Button(self.mw, text = "Enter")
        bt1.grid(row=2, column=2)

        tkinter.mainloop()
gui = Grid_GUI()
        

