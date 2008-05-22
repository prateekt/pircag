import java.awt.*;
import java.io.*;
import java.awt.print.*;
import javax.swing.*;
import javax.swing.event.*;
import java.awt.event.*;

/**
 * This class models a single print job given to the printer. In the context
 * of the Certificate Printer Application, the class models a single certificate
 * print job queued to the printer.
 *
 * The application utilizes the Java Printer API.
 * <br>
 * The class itself is technically a frame object that renders itself invisible
 * open construction. In this way, you can make your program seem completely
 * command prompt, though it isn't really. The reason for this is because java
 * uses the Graphics component of the paint class to decide what to print on paper.
 * If there is no graphics component to print, the class will not print.
 *
 * @author Prateek Tandon
 * @version ver1.0
 */
public class CertificatePrintJob extends Frame implements Printable {

	 /*
	  * The certificate image loaded into memory.
	  */
    Image cert;

	/*
	 *
	 */
    String name, jobTitle;

     /**
      * The Constructor for a Printer.
      */
    public CertificatePrintJob(String name, String jobTitle) {
        this.name = name;
        this.jobTitle = jobTitle;
        cert=new ImageIcon("cert.jpg").getImage();
        this.setVisible(true);
        this.setSize(800,800);
    }

     /**
      * The paint method of the Frame class. Whatever is placed in the paint
      * method represents what will be printed. In this way, you can print
      * shapes, strings, numbers, anything really. AGAIN: WHATEVER YOU WANT
      * TO PRINT NEEDS TO BE DRAWN USING THE GRAPHICS OBJECT IN THIS METHOD.
      * <br>
      * If you want to change anything that is printed, this is the code to change.
      * Simply add it to the paint
      * method. Quick and simple.
      */
    public void paint(Graphics g) {
        g.setFont (new Font ("SansSerif",Font.BOLD, 17));
        g.drawImage(cert, 0, 0, 661, 465, this);
        if(name.length() < 18)
            g.drawString(name, 234 + (18-name.length())*5, 237);
        else
            g.drawString(name, 234,237);
        g.setFont (new Font ("SansSerif",Font.PLAIN, 10));
        g.drawString(jobTitle, 273,295);
   }

     /**
      * Used by the Printable interface to tell the PrintJob object what
      * graphics object to print. The graphics object is specified by the
      * paint method in a frame or an applet.
      */
    public int print(Graphics g, PageFormat pf, int pageExists) throws PrinterException {
        if (pageExists >= 1) {
 	       return Printable.NO_SUCH_PAGE;
        }
        Graphics2D g2 = (Graphics2D) g;
        g2.translate(pf.getImageableX(), pf.getImageableY());
        paint(g2);
        return Printable.PAGE_EXISTS;
    }

	 /**
	  * Method used to actually call the printer to start printing.
	  */
	public void print() {
		PrinterJob thePrintJob = PrinterJob.getPrinterJob();
		//thePrintJob.setPrintable(this);

		/* Set up Book */
		  PageFormat landscape = thePrintJob.defaultPage();
		  PageFormat portrait = thePrintJob.defaultPage();
		  landscape.setOrientation(PageFormat.LANDSCAPE);
		  portrait.setOrientation(PageFormat.PORTRAIT);
		  Book bk = new Book();
		  bk.append((Printable) this, landscape);
		  thePrintJob.setPageable(bk);

		try {
		  thePrintJob.print();
		}catch (Exception PrintException) {

		}
	}
}




