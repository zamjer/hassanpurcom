package com.hassanpur.tutorials.android;
import java.io.DataInputStream;
import java.io.DataOutputStream;
import java.io.IOException;
import java.net.URL;
import java.net.URLConnection;
import java.net.URLEncoder;


public class ServerInterface {

	// Declared Constants
	public static final String SERVER_URL = "http://www.hassanpur.com/AndroidListServer/server.php";

	/**
	 * Gets the list of animals from the server.
	 * @return A string containing a comma-delimited list of animals.
	 */
	public static String getAnimalList() {
		String data = "command=" + URLEncoder.encode("getAnimalList");
		return executeHttpRequest(data);
	}

	/**
	 * Gets the sound that the animal makes from the server.
	 * @param animal String specifying the animal.
	 * @return A string representing the sound an animal makes.
	 */
	public static String getAnimalSound(String animal) {
		String data = "command=" + URLEncoder.encode("getAnimalSound");
		data += "&animal=" + URLEncoder.encode(animal);
		return executeHttpRequest(data);
	}

	/**
	 * Helper function used to communicate with the server by sending/receiving
	 * POST commands.
	 * @param data String representing the command and (possibly) arguments.
	 * @return String response from the server.
	 */
	private static String executeHttpRequest(String data) {
		String result = "";
		try {
			URL url = new URL(SERVER_URL);
			URLConnection connection = url.openConnection();
			connection.setDoInput(true);
			connection.setDoOutput(true);
			connection.setUseCaches(false);
			connection.setRequestProperty("Content-Type", "application/x-www-form-urlencoded");

			// Send the POST data
			DataOutputStream dataOut = new DataOutputStream(connection.getOutputStream());
			dataOut.writeBytes(data);
			dataOut.flush();
			dataOut.close();

			// get the response from the server
			DataInputStream dataIn = new DataInputStream(connection.getInputStream()); 
			String inputLine;
			while ((inputLine = dataIn.readLine()) != null) {
				result += inputLine;
			}
			dataIn.close();
		} catch (IOException e) {
			e.printStackTrace();
			result = null;
		}

		return result;
	}
}
