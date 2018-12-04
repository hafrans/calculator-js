Problem1000:#include <stdio.h>
int main()
{
    int a,b;   
 scanf("%d %d",&a, &b); 
   printf("%d\n",a+b); 
   return 0;
}

------------------------------------------------------Problem1000:#include <stdio.h>

int main()
{
    int a,b;
    scanf("%d %d",&a, &b);
    printf("%d\n",a+b);
    return 0;
}------------------------------------------------------Problem1001:#include <stdio.h>
int main()
{   
 int a,b;   
 scanf("%d %d",&a, &b); 
   printf("%d\n",a+b);  
  return 0;
}

------------------------------------------------------Problem1002:#include <stdio.h>

int main()
{
	printf("Hello, World!");
	return 0;
}------------------------------------------------------Problem1003:#include <stdio.h>
int main()
{
	int a,b;

	scanf("%d %d",&a,&b);

	a += b;
	b = a-b;
	a = a-b;
	printf("%d %d",a,b);

	return 0;
}------------------------------------------------------Problem1004:#include <stdio.h>
#define PI 3.14
int main()
{
	float r,c,s;


	scanf("%f",&r);

	c =  2*PI*r;

	s =  PI*r*r;
	
	printf("%.2f %.2f",c,s);

	return 0;
}------------------------------------------------------Problem1004:#include <stdio.h>
#define PI 3.14

int main()
{
	float c,s,r;

	scanf("%f",&r);

	s = r*r*PI;
	c = 2*r*PI;

	printf("%.2f %.2f",c,s);

	return 0;
}------------------------------------------------------Problem1005:#include <stdio.h>

int main()
{
	for(int i=0;i<4;i++)
	{
		for(int k = i; k>=0;k--)
		{
			printf("*");
		}
		printf("\n");

	}
	return 0;
}------------------------------------------------------Problem1006:#include <stdio.h>

int main()
{
	float c,f;

	scanf("%f",&f);

	c = (5/9.0)*(f-32);

	printf("%.1f",c);

	return 0;
}
------------------------------------------------------Problem1009:#include <stdio.h>

int main()
{
	int day,day_2,week;

	scanf("%d",&day);

	week  =  day /7.0;
	day_2 =  day%7;

	printf("%d %d",week,day_2);


	return 0;




}------------------------------------------------------Problem1010:#include <stdio.h>

int main()
{
	int stamp,day,hour,min,sec;

	scanf("%d",&stamp);

	day = stamp / (3600*24.0);

	stamp = stamp % (3600*24);

	hour = stamp / 3600.0;

	stamp = stamp % 3600;

	min = stamp / 60.0;

	sec = stamp  % 60;

	printf("%02d %02d:%02d:%02d",day,hour,min,sec);


	return 0;
}------------------------------------------------------Problem1011:#include <stdio.h>

int main()
{
	char ch;

	scanf("%c",&ch);

	ch += 32;

	printf("%c",ch);

	return 0;

}------------------------------------------------------Problem1012:#include <stdio.h> 
#include <math.h>
 

int main ()
{

	double r1,r2,r3,rSum;

	scanf("%lf %lf %lf",&r1,&r2,&r3);

	rSum = pow((pow(r1,-1)+pow(r2,-1)+pow(r3,-1)),-1);

	printf("%.2lf",rSum);

	return 0;
}------------------------------------------------------Problem1013:#include <stdio.h>

int main()
{
	double a,b,c;
	scanf("%lf%lf%lf",&a,&b,&c);

	printf("%.2lf\n",((a+b)*c/2));

	return 0;

}------------------------------------------------------Problem1014:#include <stdio.h> 
#include <math.h>
 

int main ()
{

	

	printf("%lf",cos(3.56)+log10(35)+log(8.56)+exp(2.63)+tan(0.78));

	return 0;
}------------------------------------------------------Problem1015:#include <stdio.h>

int main()
{
	int a,b,sum,ji,div,cha;

	scanf("%d %d",&a,&b);

	sum = a+b;
	cha = a-b;
	ji = a*b;
	div = a/b;

	printf("%d %d %d %d",sum,cha,ji,div);

	return 0;

}------------------------------------------------------Problem1016:#include <stdio.h>

int main()
{
	int num,a,b,c;

	scanf("%d",&num);

	a = num / 100.0;
	num  = num - a*100;
	b = num / 10.0;
	num = num -b*10;
	c = num;

	printf("%d %d %d",a,b,c);
	

	return 0;

}------------------------------------------------------Problem1017:#include <stdio.h>

int main()
{
	int a,c,d;
	float b,e;

	scanf("%d %f",&a,&b);
	
	c = a / b;

	d = a % (int) b;

	e = a / b;

	printf("%d %d %.2f",c,d,e);
	

	return 0;

}------------------------------------------------------Problem1018:#include <stdio.h> 
#include <math.h>
#define M 6e24
#define R 6.371e6
 

int main ()
{
	
	int t;
	double result;
	const double PI=4.0*atan(1.0);


	scanf("%d",&t);

	result = pow(((6.67e-11*M*t*t)/(4*PI*PI)),1.0/3) - R;

	printf("%.0lf",result);

	return 0;
}------------------------------------------------------Problem1019:#include <stdio.h>


int main()
{
	int num;

	scanf("%d",&num);

	if(num %2 == 0)
	{
		printf("even");
	}else{
		printf("odd");
	}

	return 0;

}

------------------------------------------------------Problem1020:#include <stdio.h>
#include <math.h>

int main()
{
	double num;
	double res;
	scanf("%lf",&num);

	if(num < -1)
	{
		res = pow(num,3) -1;
	}else if(num >= -1 && num <=1)
	{
		res = (-3*num)+1;
	}else if(num > 1 && num <= 10)
	{
		res = 3*exp(2*num - 1) + 5;
	}else if(num >10)
	{
		res = 5*num + 3*log10(2*num*num - 1) - 13;
	}

	printf("%.2f",res);


	return 0;
}------------------------------------------------------Problem1021:#include <stdio.h>


int main()
{
	char text = '0';

	scanf("%c",&text);

	if(text>=48 && text <= 57)
	{
		printf("numeric");
	}else if(text>=65 && text <=90 || text >=97 && text<=122)
	{
		printf("alpha");
	}else
	{
		printf("other");
	}


	return 0;
}------------------------------------------------------Problem1022:#include <stdio.h>
#include <math.h>

int main()
{
	double a,b,c;

	scanf("%lf %lf %lf",&a,&b,&c);

	if(a<=0 || b<=0 || c<=0 || a+b <=c || a+c <= b || b+c <= a || a-c >= b|| b-c>=a ||a-b>=c)
	{
		printf("not a triangle");
	}else if(a==b && b==c && a==c)
	{
		printf("equilateral triangle");
	}else if(a==b || a==c || b==c)
	{
		printf("isosceles triangle");
	}else
	{
		printf("common triangle");
	}

	return 0;
}------------------------------------------------------Problem1023:#include <stdio.h>


int main()
{
	int num;

	scanf("%d",&num);

	if((num%4 == 0 && num%100 != 0) || num % 400 ==0 )
	{
		printf("Yes");
	}else{
		printf("No");
	}

	return 0;

}

------------------------------------------------------Problem1024:#include <stdio.h>

int main()
{
	int i = 1;

	scanf("%d",&i);

	switch(i)
	{
	case 1 :
		printf("Good morning");
		break;
	case 2 :
		printf("Good afternoon");
		break;
	case 3 :
		printf("Good evening");
		break;
	case 4 :
		printf("Good night");
		break;
	default :
		printf("Bye bye");
		break;
	}

	return 0;
}------------------------------------------------------Problem1024:#include <stdio.h>

int main()
{
	int type=0;

	scanf("%d",&type);

	switch(type)
	{
	case 1:
		printf("Good morning");
		break;
	case 2:
		printf("Good afternoon");
		break;
	case 3:
		printf("Good evening");
		break;
	case 4:
		printf("Good night");
		break;
	default:
		printf("Bye bye");
	}
	return 0;
}
------------------------------------------------------Problem1025:#include <stdio.h>


int main()
{
	int i = 0;

	scanf("%d",&i);

	if(i>=90 && i<=100)
	{
		printf("A");
	}else if(i>=80 && i<90)
	{
			printf("B");
	}else if(i>=70 && i<80)
	{
			printf("C");
	}else if(i>=60 && i<70)
	{
			printf("D");
	}else{
			printf("E");
	}

	return 0;
}------------------------------------------------------Problem1025:#include <stdio.h>

int main()
{
	int type=0;

	scanf("%d",&type);
		
	type = type/10;

	switch(type)
	{
	case 10:
	case 9:
		printf("A");
		break;
	case 8:
		printf("B");
		break;
	case 7:
		printf("C");
		break;
	case 6:
		printf("D");
		break;
	default:
		printf("E");
	}
	return 0;
}
------------------------------------------------------Problem1026:#include <stdio.h>

double getLl(int month);
int main()
{
	double money,month,now = 0.0,money_now;

	scanf("%lf %lf",&money,&month);
	double ll = getLl(month);
	
    for(int i = 1;i<=(int)month;i++)
	{
		//printf("222\n");

		
	//	printf("%lf\n",ll);

		now = money*ll;
	    money = money+now;


	//	printf("%lf",now);
	}

	//money_now = money;


	printf("%.2lf",money);


	return 0;
}

double getLl(int month)
{
	double ll;
	if(month>=0 && month<=12)
	{
		ll = 0.9*0.01;
	}else if(month>12 && month<=24)
	{
		ll = 1*0.01;
	}else if(month>24 && month <=36)
	{
		ll = 1.11*0.01;
			
	}else if(month>36)
	{
		ll = 1.2*0.01;
	}	
	return ll;
}------------------------------------------------------Problem1027:#include <stdio.h>

int main()
{
	int num;

	scanf("%d",&num);

	if(num % 3 ==0 && num % 5 == 0 && num%7 == 0)
	{
		printf("Yes");
	}else{
		printf("No");
	}

	return 0;
}------------------------------------------------------Problem1028:#include <stdio.h>


int main()
{
	int a,b,c,max,min;

	scanf("%d %d %d",&a,&b,&c);
	max = a ;
	min = a ;
	if(b < min)
	{
		min = b;
	}else if(c < min)
	{
		min = c;
	}

	if(b > max)
	{
		max = b;
	}else if(c > max)
	{
		max = c;
	}

	printf("%d %d",max,min);
	


	return 0;

}

------------------------------------------------------Problem1029:#include <stdio.h>

int main()
{
	int a,b,result=0;
	char type;

	scanf("%d %d %c",&a,&b,&type);

	switch(type)
	{
	case '+':
		result = a+b;
		break;
	case '-':
		result = a-b;
		break;
	case '*':
		result = a*b;
		break;
	case '/':
		result = a/b;
		break;
	}

	printf("%d",result);

	

	return 0;
}------------------------------------------------------Problem1030:#include <stdio.h>


int main()
{
	int a,b,c,max,min,mid;

	scanf("%d %d %d",&a,&b,&c);
	max = a ;
	min = a ;
	mid = a;
	if(b < min)
	{
		min = b;
	}else if(c < min)
	{
		min = c;
	}

	if(b > max)
	{
		max = b;
	}else if(c > max)
	{
		max = c;
	}

	if((max == a && min == b) || (max == b&&min==a))
	{
		mid = c;
	}else if((max==a && min == c)|| (max == c && min == a))
	{
		mid = b;
	}else if((max==b && min==c)||(max == c&&  min ==b))
	{
		mid = a;
	}

	printf("%d %d %d",min,mid,max);
	


	return 0;

}

------------------------------------------------------Problem1032:#include <stdio.h>
 
int main()
{
	char text;

	scanf("%c",&text);

	if((int)text >=65 && (int)text <=90)
	{

		text += 32;


	}else if (text >=97 && text <=122)
	{
			text -= 32;
	}
	


	printf("%c",text);
	return 0;
}------------------------------------------------------Problem1033:#include <stdio.h>
#include <math.h>
 
int main()
{
	int x1,y1,x2,y2;

	scanf("%d %d %d %d",&x1,&y1,&x2,&y2);

	double result = sqrt(pow((x2-x1),2)+pow((y2-y1),2));

	printf("%.2lf",result);



	return 0;
}------------------------------------------------------Problem1034:#include <stdio.h>
 
int main()
{
	double price = 95.00,total;

	int num = 0;

	scanf("%d",&num);

	total = num * price;

	if(total >= 300)
	{
		total *= 0.85;
	}

	printf("%.2lf",total);


	return 0;
}------------------------------------------------------Problem1035:#include <stdio.h>

int main()
{

	int a[5]={0};
	int count = 0,i;

	while(1)
	{
		char i = getchar();
		if(i!='\n' && count <=4 && i!=-1)
		{
			a[count++] = i-48;
		}else
		{
			break;
		}
	}

	printf("%d\n",count);//output count
	
	for(i = 0;i<count;i++)
	{
		printf("%d",a[i]);
		if(i < count-1)
		{
			printf(" ");

		}
	}
	printf("\n");
	for(i = count-1;i>=0;i--)
	{
		printf("%d",a[i]);
		if(i > 0)
		{
			printf(" ");

		}
	}

	printf("\n");
	return 0;
}------------------------------------------------------Problem1036:#include <stdio.h>
 
int main()
{
	int num,result = 0;
	scanf("%d",&num);
	for(int i = 1;i<=num;i++)
	{
		result += i;
	}
	printf("%d",result);
	return 0;
}------------------------------------------------------Problem1036:#include <stdio.h>

int main()
{
	int count,i,sum = 0;

	scanf("%d",&count);

	for(i = 0;i<=count;i++ )
	{
		sum += i;


	}

	printf("%d",sum);



}------------------------------------------------------Problem1037:#include <stdio.h>

int main()
{
	int num,i,sum = 0;

	scanf("%d",&num);

	if(num%2 == 0)
	{
		num--;
	}

	for(i = 1;i<=num;i += 2 )
	{
		sum += i;


	}

	printf("%d\n",sum);



}------------------------------------------------------Problem1038:#include <stdio.h>

int main()
{
	int a,b,sum = 0;
	int i = 0,count = 0;
	while(1)
	{
                      sum = 0;
		if(scanf("%d %d",&a,&b) == EOF)
		{
			break;
		}else
		{
			if(a>b)
			{
				a = a+b;
				b = a-b;
				a = a-b;
			}

			for(i = a;i<=b;i++)
			{
				if(i%3 == 0 && i%5 == 0)
				{
					sum += i;
				}
			}
		}

		printf("%d\n",sum);
	}
	



	return 0;

}------------------------------------------------------Problem1038:#include <stdio.h>

int main()
{
	int m=0,n=0;

	while(scanf("%d%d",&m,&n) != EOF)
	{
		int sum=0,i;
		/**
		*	判断并交换
		*/
		if(m>n)
		{
			m = m+n;
			n = m-n;
			m = m-n;
		}

		for(i = m ;i<=n;i++)
		{
			if(i%15 == 0)
			{
				sum += i;
			}
			


		}

		printf("%d\n",sum);





	}
	

	return 0;

	


	

}------------------------------------------------------Problem1039:#include <stdio.h>

int main()
{
	int m,n,i=0;

	scanf("%d %d",&m,&n);

	for(i = m;i<=n;i++)
	{
		if(i%3 == 0 && i%5 != 0)
		{
			printf("%d ",i);
		}
	

	}

		printf("\n");

	return 0;

}------------------------------------------------------Problem1040:#include <stdio.h>

int main()
{
	int m=0,n=0,i,j;

	scanf("%d%d",&m,&n);

	for(i=m;i<=n;i++)
	{
		int count=0;
		for(j=2;j<i;j++)
		{
			
			if(i%j == 0)
			{
				count++;
			}
		}
			if(count == 0)
			{
				printf("%d ",i);
			}
	}

	return 0;

}------------------------------------------------------Problem1041:#include<stdio.h>
#include<math.h>

int main()
{
	double a=0,n=0,sum=0;
	int i=0,j=0,k=0;
	scanf("%lf %lf",&a,&n);

	for(i=1;i<=n;i++)
	{
		double var = 0;

		for(j=0;j<i;j++)
		{
			var += a*pow(10,j);	
		}
		sum += var;
	}

	printf("%.0lf\n",sum);

	return 0;
}------------------------------------------------------Problem1042:#include <stdio.h>

int main()
{
	int num=-2147483647,numm=0;
	

	while(1)
	{
		scanf("%d",&numm);

		if(numm == 0 )
		{
			break;
		}else if(numm > num )
		{
			num = numm;
		}

		
		
	}
	
	printf("%d",num);

	return 0;



}------------------------------------------------------Problem1045:#include <stdio.h>

int main()
{
	int upper=0,lower=0,space=0,number=0,character=0;

	

	while(1)
	{
		int ch = getchar();
		if(ch == '\n')
		{
			break;
		}

		if(ch >= 'A' && ch <= 'Z')
		{
			upper ++ ;
		}else if(ch >= 'a' && ch<= 'z' )
		{
			lower ++ ;
		}else if(ch >='0' && ch <= '9')
		{
			number ++;
		}else if(ch == ' ')
		{
			space ++;


		}else
		{
			character ++;
		}
		
		
	}
	
	printf("%d %d %d %d %d\n",upper,lower,space,number,character);

	return 0;



}------------------------------------------------------Problem1046:#include <stdio.h>

int main()
{
	int num=0,flag=0;
	int zheng=0,fu=0,zero=0;

	while(num != -32767 )
	{
		if(flag == 0)
		{
			scanf("%d",&num);
			flag = 1;
			continue;
		}

		if(num>0)
		{
			zheng++;
		}else if(num < 0)
		{
			fu++;
		}
		else
		{
			zero++;
		}
			scanf("%d",&num);
		
	}
	
	printf("%d %d %d",zheng,fu,zero);

	return 0;



}------------------------------------------------------Problem1051:#include <stdio.h>

int main()
{
	//const double cPrice = 1/3.0;
	int g=0,m=0,c=0,cCount=0;

	for(g=0;g<=20;g++)
	{
		for(m=0;m<=34;m++)
		{
			for(cCount=0;cCount<=100;cCount++)
			{
				c= cCount*3;
				if(cCount + 3*m + 5*g == 100)
				{
					printf("%d %d %d\n",g,m,c);
					
				}else{
					continue;
				}
			}
		}
	}

	return 0;

}------------------------------------------------------Problem1051:#include <stdio.h>
 
int main()
{
    //const double cPrice = 1/3.0;
    int g=0,m=0,c=0,cCount=0;
 
    for(g=0;g<=20;g++)
    {
        for(m=0;m<=34;m++)
        {
            for(cCount=0;cCount<=100;cCount++)
            {
                c= cCount*3;
                if(cCount + 3*m + 5*g == 100)
                {
                    printf("%d %d %d\n",g,m,c);
                     
                }else{
                    continue;
                }
            }
        }
    }
 
    return 0;
 
}------------------------------------------------------Problem1052:#include <stdio.h>

int main()
{
	int n,i=1,sum=1;
	scanf("%d",&n);
	for(i=1;i<n;i++)
	{
		sum = (sum+1)*2;
	}
	printf("%d",sum);
	return 0;
}------------------------------------------------------Problem1054:#include <stdio.h>

int main()
{
	int num,i=1,sum=0,j,isum=0;
	scanf("%d",&num);
	for(i=1;i<=num;i++)
	{
		isum=0;
		for(j=1;j<i;j++)
		{
			if(i%j == 0)
			{
				//printf("num %d  的因子 %d\n",i,j);
				isum += j;
			}
			
		}
		if(isum == i)
		{
				sum = isum;
		}else{
				//printf("num %d  not equals %d\n",isum,i);
				
		}
	}
	printf("%d\n",sum);

	return 0;
}------------------------------------------------------Problem1055:#include <stdio.h>

int main()
{
	int n,m,i=0,j,k,l,res1,res2;
	scanf("%d %d",&m,&n);

	for(i=1;i<=m;i++)
	{
		if(m % i == 0 && n%i == 0)
		{
			res1 = i;
		}
	}
	if(n%m == 0)
	{
		res2 = n;
	}
	else
	{
		res2 = m*n / res1;
	}
	
	printf("%d %d",res1,res2);
	return 0;
}------------------------------------------------------Problem1056:#include <stdio.h>

int main()
{
	int m=0,n=0,i,count=0;

	scanf("%d%d",&m,&n);
	//if m is larger than n ,swap
	if(m>n)
	{
		m = m+n;
		n = m-n;
		m = m-n;
	}

	for(i=m;i<=n;i++)
	{
		int o,p,q;
		o = i%10;
		p = (i/10)%10;
		q = (i/10/10)%10;
		if((o*o*o + p*p*p + q*q*q) == i)
		{
			printf("%d\n",i);
			count++;
		}

			}
	if(count == 0)
	{
		printf("No\n");
	}

	return 0;

	


	

}------------------------------------------------------Problem1059:#include <stdio.h>

int main()
{
	int value = 1;
	int num = 0;

	scanf("%d",&num);

	do{
		
		value *= num %10;
		num /= 10;


	}while(num != 0);

	printf("%d\n",value);

	return 0;
}------------------------------------------------------Problem1080:#include <stdio.h>

int main()
{
	int n,m,i=0,j,k,l,res1,res2,a,b,c,count=0;
	while(1)
	{
		count = 0;
		scanf("%d %d",&m,&n);
		if(m == 0 && n == 0)
		{
			break;
		}

		for(i=m;i<=n;i++)
		{
			a = i%10;
			b = i/10%10;
			c = i/10/10%10;

			if(a*a*a + b*b*b + c*c*c == i)
			{
				count ++;
			}
		}
		printf("%d\n",count);
	}
	

	return 0;
}------------------------------------------------------Problem1083:#include <stdio.h>

int main()
{
	int loop = 0;

	while(scanf("%d",&loop) != EOF)
	{
		int max = 2*loop - 1;
		int i = 0,k=0;
		for(i = 1; i<=loop;i++)
		{
			for(k=1;k<i;k++)
			{
				printf(" ");
			}
			for(k=1;k<=max;k++) //output the signal "#"
			{
				printf("#");
			}
			max -= 2;
			printf("\n");// output a \n

		}
		
	}
	

	return 0;
}------------------------------------------------------Problem1093:#include <stdio.h>


int main()
{
	long long a=0,b=0;
	

	while(scanf("%lld %lld",&a,&b) != EOF)
	{
		int flag = 0;
		if(a>b)
		{
		   a=a+b;
		   b=a-b;
		   a=a-b;
		   flag = 1;
		}
		int i,Maxcount=1;
		for(i=a;i<=b;i++)
		{
			long long n = i;int count = 1;
			while(n != 1.00)
			{
				if((int)n % 2 != 0)
				{
					n = 3*n+1;
				}
				else
				{
					n = n/2;
				}
				count ++;
			}
			if(count > Maxcount)
			{
				Maxcount = count;
			}

		}
		if(flag == 1)
		{
		   a=a+b;
		   b=a-b;
		   a=a-b;
		}

		printf("%lld %lld %d\n",a,b,Maxcount);
	}

	return 0;
}------------------------------------------------------Problem1095:#include <stdio.h>

int main()
{
	int month = 0;//月份
	int flag= 0;//标记
	int sum = 1;//总数

	while(scanf("%d",&month) != EOF)
	{
		int a[2] = {1,1};
		int i=0;
		//int offset = 0;
		for(i=3;i<=month;i++)
		{
				sum = a[0] + a[1];
				a[0] = a[1];
				a[1] = sum;
			
		}
		sum = a[1];
		printf("%d\n",sum);
		
	}
	

	return 0;
}------------------------------------------------------Problem1131:#include <stdio.h>
#include <string.h>
int main()
{
	int m,n,k=0,l;
	scanf("%d",&l);
	while(k++<l)
	{
		scanf("%d %d",&m,&n);
		char old[50] = {'\0'};
		char num[50] = {'\0'};
		int i,offset=0;
		scanf("%s",&old);
		for(i=m;i<=n;i++)
		{
			num[offset++] = old[i];
		}
		if(offset == 0 )
		{
			break;
		}

		printf("%s\n",num);
	}

	return 0;
}------------------------------------------------------Problem1148:#include <stdio.h>
#include <string.h>

int main()
{
	int dec=0;//initial Value
	while(scanf("%d",&dec) != -1)
	{
		
		int bytes[32]={'\0'},offset=-1;//关于字符数组
		//位运算开始

		do{
			bytes[++offset] = dec & 1;
			dec = dec>>1;//向右移位
		}while(dec != 0);
		
		//输出开始

		int i = 0;

		for(i=offset;i>=0;i--)
		{
			printf("%d",bytes[i]);
		}
		printf("\n");//换行！


	}

	return 0;
}------------------------------------------------------Problem1185:#include <stdio.h>
int main()
{
    printf("This is a C program.\n");
    return 0;
}
------------------------------------------------------Problem1187:#include <stdio.h>
int main()
{
    printf("Biang Biang Biang\n");
    return 0;
}
------------------------------------------------------Problem1189:#include <stdio.h>
int main()
{
		printf("  M\n");
		printf(" MMM\n");
		printf("MMMMM\n");
		printf(" MMM\n");
		printf("  M\n");

		return 0;



}------------------------------------------------------Problem1193:#include <stdio.h>

int sum = 0;
int loopSum(int num);
int main()
{
	int num;
	while(scanf("%d",&num) != EOF)
	{
		sum = 0;
		printf("%d\n",loopSum(num));
	}

	return 0;
}

int loopSum(int num)
{
	if(num <= 0)
	{
		return sum;
	}
	sum += num % 10;
	num /= 10;
	loopSum(num);
	
	
}------------------------------------------------------Problem1200:#include <stdio.h>

int main()
{

	printf("*****\n");
	printf(" ***\n");
	printf("  *\n");
	printf(" ***\n");
	printf("*****\n");


	return 0;
}------------------------------------------------------Problem1201:#include <stdio.h>

int main()
{
	int i,j,k;

	for(i=0;i<6;i++)
	{
		for(j=0;j<i;j++)
		{
			printf(" ");
		}
		for(k=0;k<=5-i;k++)
		{
			printf("*");
			if(k<5-i)
			{
				printf(" ");
			}
		}

		printf("\n");

	}


	return 0;
}------------------------------------------------------Problem1242:#include<stdio.h>
# define M_E	2.7182818284590452354

int main()
{
	int num = 0,i;
	scanf("%d",&num);
	double res = 1.0;
	for(i = 0;i<num;i++)
	{
		res *= M_E;
	}
	printf("%.8lf\n",res);

	
	return 0;
}
------------------------------------------------------Problem1293:#include <stdio.h>
#include <math.h>

int main()
{
	double a,b,c,bzc,area;

	scanf("%lf %lf %lf",&a,&b,&c);
	
	if(a+b<=c || a+c<=b || b+c<=a || a-b>=c || a-c>=b || b-c >=a )
	{
		printf("No");
		
		return 0;
	}

	bzc = (a+b+c)/2;
	area = sqrt(bzc*(bzc-a)*(bzc-b)*(bzc-c));

	printf("%.6lf",area);




	return 0;
}------------------------------------------------------Problem1297:#include <stdio.h>

int main()
{
	int a = 0;

	scanf("%d",&a);

	if(a%3 == 0 && a%5 == 0)
	{
		printf("该数能同时被3和5整除\n");
	}else if(a%3 == 0 || a%5 == 0)
	{
		printf("该数能被其中一个数整除\n");
	}else
	{
		printf("该数既不能被3整除也不能被5整除");
	}


	return 0;
}------------------------------------------------------Problem1298:#include <stdio.h>

int main()
{
	
	double x = 0,y = 0,result;

	char type = '+';

	scanf("%lf%c%lf",&x,&type,&y);

	switch(type)
	{
		case '+':
			
			result = x+y;

		break;

		case '-':

			result = x-y;

		break;

		case '*':

			result = x*y;

		break;

		case '/':

			result = x/y;

		break;
	}
	
	printf("%lf",result);


	return 0;
}------------------------------------------------------Problem1299:#include <stdio.h>
#include <math.h>

int main()
{
	double x,y,z,p,sq;

	scanf("%lf%lf%lf",&x,&y,&z);

	if(x+y <= z || x+z <=y || y+z <= x)
	{
		//先判断是否能构成一个三角形。
		printf("输入的三条边长不能构成三角形\n");
		return 0;
	}

	p = (x+y+z)/2; //半周长

	sq = sqrt(p*(p-x)*(p-y)*(p-z));

	printf("%lf\n",sq);
	//计算完毕

	if(x*x + y*y == z*z || x*x + z*z == y*y || z*z + y*y == x*x )
	{
		printf("直角三角形\n");
	}else if(x==y && y==z)
	{
		printf("等边三角形\n");
	}else if(x==y || y==z)
	{
		printf("等腰三角形\n");
	}else{
		printf("一般三角形\n");
	}
	


	


	return 0;
}------------------------------------------------------Problem1314:#include <stdio.h>

static int n = -1;
static int num = 1;
static int sum = 0;
int main()
{
	if(n<0)
	{
		scanf("%d",&n);
	}
	if(num>n)
	{
		printf("%d\n",sum);

		return 0;
	}
	sum += num++;

	main();
}------------------------------------------------------