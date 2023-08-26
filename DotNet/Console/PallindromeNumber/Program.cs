// See https://aka.ms/new-console-template for more information
Console.Write("Enter a number: ");
int num = Convert.ToInt32(Console.ReadLine());
int temp = num;
int rev = 0;

while(temp > 0)
{
    int digit = temp % 10;
    rev = rev * 10 + digit;
    temp /= 10;
}

if(num == rev)
    Console.WriteLine("{0} is a pallindrome number.", num);
else
    Console.WriteLine("{0} is not a pallindrome number.", num);
