public class Main { public static void main(String[] args) {

 int  n [] = {98,89,88,86,90,100};
int len = n.length;

int sum = 0;

for(int i = 0; i < len; i++){
sum += n[i];
}

System.out.println(sum / len);

 } 

}