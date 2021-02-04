#define _CRT_SECURE_NO_WARNINGS
#include <stdio.h>

int anagram(char arr1[], char arr2[]);
int compare(char arr1[], char arr2[]);
void sort(char arr[]);
void swap(char *a, char *b);
void empty_stdin(void);

int main(void){
    while(1){
    char str1[6];
    char str2[6];
    printf("5 자리의 두 숫자를 입력하세요 (종료하려면 q): ");
    scanf("%5[^,\n], %s", str1, str2); //%5[^,\n] means read at most five characters or until a comma or \n is encountered.
    printf(" -> ");
    int answer = anagram(str1, str2);
    str1[0]='\0';
    str2[0]='\0';
    empty_stdin(); 
    if (answer==1) break;
    }

    return 0;
}

int anagram(char arr1[], char arr2[]){
    if (arr1[0] == 'q' ){
        printf(" 종료합니다.");
        return 1;
    }
    else
    {
        sort(arr1);
        sort(arr2);

        int i =0;
        for(i=0; i<5; i++){
            if(arr1[i]!=arr2[i]){
                printf("False\n");
                break;
            }
        }
        if (i==5) printf("True\n");
        return 0;
    } 
}

void sort(char arr[]){
    for (int i =0; i<4; i++){
        for(int j=4; j>i; j--){
                if(arr[j-1]>arr[j])
                    swap(&arr[j-1], &arr[j]);
        }
    }
}

void swap(char *a, char *b){
    char tmp = *a;
    *a = *b;
    *b = tmp;
}

void empty_stdin(void) {
    int c = getchar();

    while (c != '\n' && c != EOF)
        c = getchar();
}