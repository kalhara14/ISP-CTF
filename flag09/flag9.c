#include<stdio.h>
#include<string.h>
int check_name(char *name);
void print_flag(){
    int flag_hex[40] = {127,126,117,83,68,86,107,34,32,117,115,116,40,116,113,39,33,1116,34,32,116,116,117,32,38,33,113,118,41,41,36,118,36,40,32,41,39,35,113,109};
	int i = 0;
	while ( i < 40)
    {
        char c = (flag_hex[i] ^ 16);
		printf("%c", c);
		i += 1;
    }
}
int main()
{
    char name;
    int val=1;
    printf("Chant the spell: ");
    scanf( "%s", &name);
    val=check_name(&name);
    if (val == 0)
    {
        print_flag();
    }
    else
    {
        printf ("Failed\n");
    }
    
    return 0;
}

int check_name(char *name)
{
    char code[10];
    int code_hex[10] = {110,107,100,99,100,95,102,107,111,120};
    int i = 0;
    while ( i < 10 )
    {
        code[i] = (code_hex[i] ^ 10);
        i += 1;
    }
    int result= strncmp(code,name,10);
    if ( result == 0)
    {   
        return 0;
    }
    else
    {
        return 1;
    }
        
}