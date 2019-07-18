package bcu.changeme.phonebook.main;

import bcu.changeme.phonebook.model.AlreadyPresentException;
import bcu.changeme.phonebook.model.NotPresentException;
import bcu.changeme.phonebook.model.PhoneBook;

public class AddCommand implements Command {
	private final String name;
	private final String phoneNumber;
	
	public AddCommand(String[] parts) throws InvalidCommandException {
		if(parts.length != 3) {
			throw new InvalidCommandException();
		}
		this.name = parts[1];
		this.phoneNumber = parts[2];
	}
	
	@Override
	public void execute(PhoneBook phoneBook) throws AlreadyPresentException, NotPresentException {
		phoneBook.addEntry(name, phoneNumber);
		System.out.println("Entry added.");
	}
}
