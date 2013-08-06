import java.awt.*;
import java.applet.*;
import java.awt.event.*;
import javax.swing.*;
import java.io.*;
import java.net.URLDecoder;
import java.net.URLEncoder;

public class GuiExample extends JApplet implements ActionListener {

	JButton decode;
	JButton encode;

	TextArea nameField;

	public void init() {

		setLayout(new BorderLayout());
        JPanel panel = new JPanel();
        panel.setLayout(new FlowLayout(FlowLayout.CENTER));
        
		decode = new JButton("Decode");
		encode = new JButton("Encode");
		
		decode.addActionListener(this);
		encode.addActionListener(this);

	 
		nameField = new TextArea("", 4, 30, TextArea.SCROLLBARS_VERTICAL_ONLY);

		nameField.setBounds(20, 70, 400, 60);
		decode.setBounds(20, 120, 100, 30);
		encode.setBounds(140, 120, 100, 30);

		// now that all is set we can add these components to the applet

		
		panel.add(decode);
		panel.add(encode);
		
		add(panel, BorderLayout.SOUTH);
		add(nameField, BorderLayout.CENTER);
	}

	public void actionPerformed(ActionEvent e) {
		if (e.getActionCommand().equals("Decode")) {
			//JOptionPane.showMessageDialog(new JFrame(), decode(nameField.getText()));
			nameField.setText(decode(nameField.getText()));
		}
		if (e.getActionCommand().equals("Encode")) {
			//JOptionPane.showMessageDialog(new JFrame(), encode(nameField.getText()));
			nameField.setText(encode(nameField.getText()));
		}
	}

	private String encode(String input) {
		String encodedUrl = null;
		try {
			encodedUrl = URLEncoder.encode(input, "UTF-8");
		} catch (UnsupportedEncodingException e) {
			encodedUrl = e.toString();
		}

		return encodedUrl;
	}

	private String decode(String encodedString) {
		String decodedUrl = null;
		try {
			decodedUrl = URLDecoder.decode(encodedString, "UTF-8");
		} catch (UnsupportedEncodingException e) {
			decodedUrl = e.toString();
		}

		return decodedUrl;
	}

	private char toHex(int ch) {
		return (char) (ch < 10 ? '0' + ch : 'A' + ch - 10);
	}

	private boolean isUnsafe(char ch) {
		if (ch > 128 || ch < 0)
			return true;
		return " %$&+,/:;=?@<>#%".indexOf(ch) >= 0;
	}

	/*
	 * public static void main(String[] ss){ Console console = System.console();
	 * String textToEncode = console.readLine("Text to Encode ? ");
	 * 
	 * String ecode = new GuiExample().encode(textToEncode); String decode = new
	 * GuiExample().decode(ecode); System.out.println( "Encoding :" + ecode );
	 * System.out.println( "Decode :" + decode ); }
	 */

}