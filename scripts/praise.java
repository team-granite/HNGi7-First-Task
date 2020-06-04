package com.company;

class MyInfo {
    private final String fullName;
    private final String ID;
    private final String language;
    private final String email;

    public MyInfo(String name, String Id, String lang, String emailAdd) {
        fullName = name;
        ID = Id;
        language = lang;
        email = emailAdd;
    }
    public String toString(){
        return String.format("Hello World, this is %s with HNGi7 ID %s using %s for stage2 task and %s", fullName, ID, language, email);
    }
}
public class MyInfoTest{
    public static void main(String [] args){
        MyInfo myInfo = new MyInfo("Praise Odeyemi", "HNG-05451","Java","boluwatifeodeyemi@gmail.com" );
        System.out.println(myInfo);
    }
}