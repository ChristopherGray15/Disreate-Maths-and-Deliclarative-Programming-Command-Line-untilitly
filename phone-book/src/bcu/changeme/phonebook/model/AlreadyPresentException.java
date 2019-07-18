package bcu.changeme.phonebook.model;

/**
 * Is thrown when trying to add an entry to the phone book, but an entry of that
 * name is already present.
 * <p>
 * The name may already be present in a different capitalisation.
 * 
 * @author S17117107
 */
public class AlreadyPresentException extends Exception {
	private final String name;

	/**
	 * Creates an {@code AlreadyPresentException}, given the person's name.
	 * 
	 * @param name the persons name
	 */

	public AlreadyPresentException(String name) {
		this.name = name;

	}

	/**
	 * Returns a name.
	 * 
	 * @return
	 */
	public String getName() {
		return name;

	}
}
