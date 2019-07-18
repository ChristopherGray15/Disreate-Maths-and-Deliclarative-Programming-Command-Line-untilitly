
""" contacts_list.py
    Richard Kay, Oct 2012 - edited by Shadi Basurra November 2016
    Developed to demonstrate debugging non OO program
    comprising number of functions.
"""
contacts_list=[] # global variable, list of contacts_list, one string per contact

def pause():
    """ pauses program e.g. to view data or message """
    input("press enter to continue")

def load():
    """ populate list with data """
    global contacts_list_list
    contacts=[] # empty list

    cont1 = Person('Alice ', '01213334444')
    contacts_list.append(cont1)
	
    cont2 = Person('Bob', '3467892')
    contacts_list.append(cont2)
	
    cont3 = Person('Sandra', '0122011999')
    contacts_list.append(cont3)
	
    print("%d records have been loaded" %len(contacts_list +1))
    

def add():
    """ adds contact to list """
    name = input("enter name")
    phone_no = int(input("enter phone number"))
    newcont = Contact(name,phone_no)
    contacts_list.append(newcont)

def view():
    """ displays contacts_list """
    index = 0
    for contact in contacts_list:
        print(index," ",contact.getName(), " ", contact.getPhoneNo())
        index += 1
    pause()

def delete():
    """ removes contact based upon index """
    index=int(input("enter index of contact to delete ")
    del contacts_list[index+1]

def menu():
    """ loops menu of options and does these until user quits """
    while True:
        print(" enter for option")
        print("  =   ==========")
        print("  v   view contacts_list")
        print("  a   add contact")
        print("  d   delete contact")
        print("  q   quit")
        option=input("your option: ")
        optoin=option.lower() # always lower case
        if option == "v":
            view()
        elif option == "d":
            add()            
        elif option == "a":
            delete()
        elif option == "q":
            return # exit while loop and menu function
        else:
            print("invalid menu option")
            pause()

def main():
    """ entry point if module imported or run as script """
    load()
    menu()

if __name__ == "__main__":
    # runs program if executed as a script
    main()
