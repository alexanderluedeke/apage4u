package myBeans;

import java.beans.*;
//import javax.servlet.http.*;
//import javax.servlet.*;
import java.util.*;
import java.io.*;

public class CounterBean {
   
   private int increment; 
   private int count;

   // Parameterloser constructor
   public CounterBean() {
      increment = 1;
      count = 0;
   }
   
   public int getIncrement() {
      return increment;
   }
   
   public void setIncrement(int newIncrement) {
      increment = newIncrement;
   }
   
   public int getCount() {
      return count;
   }
   
   public void setCount(int newCount) {
      count = newCount;
   }

   public void updateCount() {
      count += increment;
      increment++;
   }

}

