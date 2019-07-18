package bcu.changeme.phonebook.model;

/**
 *  thrown when trying to get, update or remove an entry from the phone book, but no entry of that name exists.
 *  
 *  
 *  @author Andrew Kay
 */
public class NotPresentException extends Exception {
	
	
}
	private final String name;

	/**
	 * Creates a {@code NotPresentExcetion}, given the person's name
	 * 
	 * 
	 * @param name the name which is already present in the Phonebook
	 * 
	 *
	 */
	public NotPresentException(String name) {
		this.name = name;
	
	
	public String getName() {
		return name;
	}
}
