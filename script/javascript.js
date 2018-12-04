/**

JavaScript Calculator V 0.32

Hafrans Studio

<master@hafrans.com>
<webmaster@hafrans.com>

Date: Nov 1st 2015

**/

/**
* Global vars
*/

var status = 0;

/*
*	0 = normal 1 = finished -1 = error 2 = calculate
*/
var islow = false;
var oldvar = 0; //旧变量
var type = "";//算法形式  0无  1加  2减 3乘 4除。
var newvar = 0; //新驻变量
var needClean = true;
////////////////////////////////////////////////////////////////////////

/**
get the object
*/
function $(name){
	if(name[0] == "#")
	{
		return document.getElementById(name.substring(1));
	}else if(name[0] == ".")
	{
		return document.getElementsByClassName(name.substring(1));
	}
}

window.onload = function(){
	//alert($("#panel").innerHTML.length);
	onChange();
};

/**
* onChange function
*/
function onChange()
{
	if($("#panel").innerHTML.length >= 17)
	{
		$("#panel").style.fontSize = "20px";
	}else if($("#panel").innerHTML.length >= 13)
	{
		$("#panel").style.fontSize = "30px";
	}else if($("#panel").innerHTML.length >= 9)
	{
		$("#panel").style.fontSize = "40px";
	}else {
		
		$("#panel").style.fontSize = "60px";
	}
}
/**
* Operation by Hafrans
*/


function append(char)
{
		//If user want to input "AC"
		if(char == "AC")
		{
			///AC事件设置。
			if(status != 0)
			{
				//当遇到了错误的时候做出全清的功能
				 islow = false;
				 oldvar = 0; //旧变量
				 type = "";//算法形式  0无  1加  2减 3乘 4除。
				 newvar = 0; //新驻变量
				$('#panel').innerHTML = '0';
				status = 0;
			}else{
				//没有遇到错误的时候只是删掉本行。
				$('#panel').innerHTML = '0';
				status = 0;
				}
			needClean = true;
			onChange();
			return true;
		}
		
		//normal Type
		//初始输入或者按过计算操作按钮
		if(status == -1)
		{
			return false;
		}
		//alert(needClean);
		if(needClean == true)
		{
			if(char != '--' && char != "+" && char != '-' && char != '×' && char != "÷" && char != "=" && char != "%")
			{
				$("#panel").innerHTML = char;
				needClean = false;
				//alert("sad");
			}else{
				//alert("sad");
				calculator(char,$("#panel").innerHTML);
				needClean = true;
			}
			
			
		}else{
			if(char == "+" || char == '-' || char == "×" || char == "÷" || char == "=" || char == "%")
			{
				calculator(char,$("#panel").innerHTML);
				needClean = true;
			}else
			{
				if(char == "--")
					{
						//增加或删掉(-)
						if(islow == false)
						{
							//add a (-)
						$("#panel").innerHTML = '-'+$("#panel").innerHTML;
						islow = true;
						}else{
							
							//remove a (-)
						$("#panel").innerHTML = $("#panel").innerHTML.substring(1);
						
						islow = false;
						}
						
					}else{
							$("#panel").innerHTML += char;
					}
			}
		
		}
		
			//判断输入字符是否过长
		if($("#panel").innerHTML.length >= 23)
		{
			showException("泥垢了");
			return false;
		}
		
		onChange();
		
		
	
}

/**
已经丢弃

function append(char){
	//先进行判断
	if(char == "AC")
	{
		///AC事件设置。
		if(status != 0)
		{
			//当遇到了错误的时候做出全清的功能
			 islow = false;
			 oldvar = 0; //旧变量
			 type = 0;//算法形式  0无  1加  2减 3乘 4除。
			 newvar = 0; //新驻变量
			$('#panel').innerHTML = '0';
			status = 0;
		}else{
			//没有遇到错误的时候只是删掉本行。
			$('#panel').innerHTML = '0';
			status = 0;
			}
		
		onChange();
		return true;
	}
	if(status != -1)
	{		
	
		//判断第一个数字是0或者上一表达式的情况。
		if( $("#panel").innerHTML == "0" || needClean == true)
		{
			needClean = false;
			
			//直接输入运算符会怎么样？
			if(char == "+" || char == '-' || char == '×' || char == "÷" || char == "=")
			{
						calculator(char,$("#panel").innerHTML);
			}else{
				
				//判断输入负数的情况
					if(char != "--")
					{
						$("#panel").innerHTML = char;	
						
					}
					
			}
		}else{
			
			//识别运算符并且进行运算。
			
			if(char == "+" || char == '-' || char == '×' || char == "÷" || char == "=")
			{
						calculator(char,$("#panel").innerHTML);//计算
			}else if(char == "--")
			{
				//增加或删掉(-)
				if(islow == false)
				{
					//add a (-)
				$("#panel").innerHTML = '-'+$("#panel").innerHTML;
				islow = true;
				}else{
					
					//remove a (-)
				$("#panel").innerHTML = $("#panel").innerHTML.substring(1);
				
				islow = false;
				
				}
				
			}else{
				
				$("#panel").innerHTML += char;
			}
		}
		//判断输入字符是否过长
		if($("#panel").innerHTML.length >= 23)
		{
			showException("泥垢了");
			return false;
		}
	
	   onChange();
	}
	return true;
	
	
	
}
**/

/**
		进行计算
*/
function calculator(char,str)
{	
		

		if(type == "")
		{
		oldvar = str;
		type = char;
		needClean = true;
		return true;
		}else{
		
		newvar = str;
		oldvar = parseFloat(oldvar);
		newvar = parseFloat(newvar);
		
						switch(type)
						{
							case "+":
							//type = 1;
							oldvar += newvar;
							
							break;
							
							case "-":
							//type = 2;
							oldvar -= newvar;
							
							break;
							
							case "×":
							//alert("cheng");
							//type = 3;
							oldvar *= newvar;
							
							break;
							
							case "÷":
							//type = 4;
							oldvar /= newvar;
							
							break;
							
							case "%":
							//type = 5;
							oldvar *= newvar*0.01;
							
							break;
							
							case "=":
								alert("等于啦");
							
							break;
							
							default:
								//showException("unknown");
							break;
							//alert();
							
						}
	
						
			type = char;
	
	    	}
			
	
	
	needClean = true;
}
/*
	抛出错误并且禁止操作，除了AC

*/

function showException(char)
{
	$("#panel").style.fontSize = "40px";
	$('#panel').innerHTML = "ERROR:"+char;
	status = -1;
	needClean = true;
	return true;
}
/*

抛出结果

*/

function showResult()
{
				append("+");
				if(oldvar == "Infinity" || oldvar == "-Infinity")
				{
					showException("作死？");
				}else{
					
				$('#panel').innerHTML = oldvar;
				}islow = false;
				 oldvar = 0; //旧变量
				 type = "";//算法形式  0无  1加  2减 3乘 4除。
				 newvar = 0; //新驻变量
				 needClean = true;
				onChange();
				return true;
}

