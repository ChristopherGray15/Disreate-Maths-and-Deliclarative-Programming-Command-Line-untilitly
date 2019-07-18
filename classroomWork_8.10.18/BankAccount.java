class BankAccount {
    double balance;
    int accountNumber;
    String accountHolder;
    String kind;
    
    BankAccount(double balance, int accountNumber, String accountHolder, String kind){
        this.balance = balance;
        this.accountNumber = accountNumber;
        this.accountHolder = accountHolder;
        this.kind = kind;
    
    }

    double getBalance(){
        return balance;
    
    }
    void setBalance(double balance){
        this.balance = balance;
        
    }
    int getAccountNumber(){
        return accountNumber;
    }
    void setAccountNumber(int accountNumber){
        this.accountNumber = accountNumber;
    }
    
   
    String getAccountHolder(){
        return accountHolder;
    }
    void setAccountHolder(String accountHolder){
        this.accountHolder = accountHolder;
    
    }
    
    
    String getKind(){
        return kind;
    
    }
    void setKind(String kind){
        this.kind = kind;
    
    }
    
   
    void deposit(double amount){
        balance += amount;
    
    }
    
    boolean isOverdrawn(){
        return balance <0;
    
    }
}


