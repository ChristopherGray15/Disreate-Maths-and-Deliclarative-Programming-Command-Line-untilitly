import static org.junit.Assert.*;
import org.junit.Test;

public class BankAccountTest{
    BankAccount account = new BankAccount(
            100,
            123456,
            "Andrew",
            "Savings"
        );
    @Test
    public void testGetBalance () {
        assertEquals(100.0, account.getBalance(), 0); 
    }

    @Test
    public void testGetAccountNumber () {
        assertEquals(123456, account.getAccountNumber()); 
    }

    @Test
    public void testGetAccountHolder () {
        assertEquals("Andrew", account.getAccountHolder()); 
    }

    @Test
    public void testGetKind () {
        assertEquals("Savings", account.getKind());
    }

    @Test
    public void testSetBalance () {
        account.setBalance(87);
        assertEquals(87.0, account.getBalance(), 0); 
    }
    @Test
    public void testSetAccountNumber () {
        account.setAccountNumber(123456);
        assertEquals(123456, account.getAccountNumber()); 
    }
    @Test
    public void testSetAccountHolder () {
        account.setAccountHolder("Andrew");
        assertEquals("Andrew", account.getAccountHolder()); 
    }
}