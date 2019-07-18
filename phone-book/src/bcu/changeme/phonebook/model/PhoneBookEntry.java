package bcu.changeme.phonebook.model;

/**
 * Models a single entry in the phone book, with a name and a phone number.
 * <p>
 * The phone book stores a single phone number for each name
 * <p>
 * names are case-insensitive when used to get, update or remote an entry, but the phone book stores names with there original capitalisation.
 * 
 *  @Author Chris Gray
 */
public class PhoneBookEntry {
	private final String name;
	private String phoneNumber;
	
	public PhoneBookEntry(String name, String phoneNumber) {
		this.name = name;
		this.phoneNumber = phoneNumber;
		
	}
	
	public String getName() {
		return name;
	}
	
	public String getPhoneNumber() {
		return phoneNumber;
	}
	
	public void setPhoneNumber(String phoneNumber) {
		this.phoneNumber = phoneNumber;
	}
}
