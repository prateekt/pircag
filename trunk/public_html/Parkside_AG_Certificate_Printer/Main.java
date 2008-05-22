import java.io.*;
import java.awt.event.*;
import java.awt.*;
import java.awt.print.*;

 /**
  * The main class that runs the application.
  */
public class Main extends Frame {

     /**
      * The main method.
      */
    public static void main(String[] args) {
        try {

			//Get pairs of names and positions from file.
            BufferedReader r = new BufferedReader(new FileReader("data.txt"));
            String line="";
            while((line=r.readLine())!=null) {
                int delimPosition = line.indexOf(":");
                String name = line.substring(0, delimPosition).trim();
                String position = line.substring(delimPosition+1, line.length()).trim();

            	//create print jobs out of them and queue them to the printer
            	//by using the print method
            	CertificatePrintJob c = new CertificatePrintJob(name, position);
                c.print();
            }
        }
        catch(Exception e) {
			e.printStackTrace();
        }
    }

}
