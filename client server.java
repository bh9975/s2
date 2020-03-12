//client

import java.io.*;
import java.net.*;

class client1 
{
    public static void main(String[] args) throws IOException
    {
           Socket s = new Socket("localhost", 1234);
           BufferedReader br = new BufferedReader(new InputStreamReader(s.getInputStream()));
           String date = br.readLine();
	       System.out.println("Date and time is:"+date);
           s.close();
           br.close();
     }
  }


//server

import java.net.*;
import java.io.*;
import java.util.*;

class server1
{
    public static void main(String[] args) throws IOException
    {
          ServerSocket ss = new ServerSocket(1234);
          System.out.println("Server Started.......");
          Socket s= ss.accept();
          System.out.println("Server Connected.......");
          PrintWriter out = new PrintWriter(s.getOutputStream(), true);
          Date d=new Date();
          out.println(d);
          out.close();
          s.close();
    } 
 }
 
