import java.io.BufferedReader;
import java.io.InputStreamReader;
import java.io.*;

public class Charge {

    public static void main(String[] args) {

        String command = "google-chrome";
        try {
          Process proc = Runtime.getRuntime().exec(command);

          // Read the output

          BufferedReader reader =
                new BufferedReader(new InputStreamReader(proc.getInputStream()));

          String line = "";
          while((line = reader.readLine()) != null) {
              System.out.print(line + "\n");
          }

          proc.waitFor();
      } catch(Exception e){
          System.out.println(e.toString());
          e.printStackTrace();
      }

    }
}
