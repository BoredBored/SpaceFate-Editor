#include <iostream>
#include <string>
using namespace std;

unsigned char w = 24;
string s = "$";
string n = "\n";
string c = " ";

string g (unsigned char& w, string& buff) {
  unsigned char t = w / 2 - buff.length () / 2;
  string y = "";
  for (unsigned char e = 0; e < t; e++)
    {
      y += c;
    }
  return s + y + buff + y + s + n;
}

string a ()
{
  string f = "";
  for (unsigned char i = 0; i < w; i++)
    {
      f += s;
    }
  return s + n;
}

string z ()
{
  string innerText = "";
  string p = c + s + s + s + c;
  for (unsigned char o = 0; o < 2; o++)
    {
      string j = o ? c : s;
      string k = o ? s : c;
      for (unsigned char q = o ? 0 : 4; o ? q < 4 : q >= 0; o ? q++ : q--){
	    string buff = "";
	    switch (q){
	        case 0:
	        buff = c + c + s + c + c;
	        break;
	        
	        case 1:
	        buff = p;
	        break;
	        
	        case 2:
	        case 3:
	        buff = j + c + s + c + k;
	        break;
	    }
	    innerText += g(w, buff);
	  }
        innerText += o ? g(w, p) : "";
    }
    return innerText;
}

int main ()
{
  string b = a ();
  cout << n + b + z() + b;
  return 0;
}
