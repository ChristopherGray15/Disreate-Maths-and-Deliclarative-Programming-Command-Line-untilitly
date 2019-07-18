import tkinter

class Temp_converter_GUI:

    def __init__(self):

        self.mw = tkinter.Tk()
        self.mw.title("Temperature Converter")

        self.top_frame = tkinter.Frame(self.mw)
        self.mid_frame = tkinter.Frame(self.mw)
        self.bottom_frame = tkinter.Frame(self.mw)

        self.prompt_label = tkinter.Label(self.top_frame, text = "Enter Temperature in Celsius")
        self.temp_entry = tkinter.Entry(self.top_frame, width = 15)

        self.prompt_label.pack(side = "left")
        self.temp_entry.pack(side = "left")
        
        self.desc_label = tkinter.Label(self.mid_frame, text = "Converted Temperature in Fahrenheit : ")
        self.result = tkinter.StringVar()
        self.result_label = tkinter.Label(self.mid_frame, textvariable = self.result)

        self.desc_label.pack(side = "left")
        self.result_label.pack(side = "left")

        self.calc_button = tkinter.Button(self.bottom_frame, text = "Convert", command = self.convert)
        self.quit_button = tkinter.Button(self.bottom_frame, text = "Quit", command = self.mw.destroy)


        self.calc_button.pack(side = "left")
        self.quit_button.pack(side = "left")

        self.top_frame.pack()
        self.mid_frame.pack()
        self.bottom_frame.pack()

        tkinter.mainloop()

    def convert(self):

        celsius = float(self.temp_entry.get())
        fahrenheit = (9/5) * celsius + 32

        self.result.set(fahrenheit)

gui = Temp_converter_GUI()        
