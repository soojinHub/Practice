#include <stdio.h>

int main(void){
    int score;
    printf("학점 프로그램\n종료를 원하면 '999'를 입력\n[학점 테이블]\n");
    printf("점수 : %10d %10d %10d %10d %10d %10d %10d %10d %10d\n", 95, 90, 85, 80, 75, 70, 65, 60, 0);
    printf("학점 : %10s %10s %10s %10s %10s %10s %10s %10s %10s\n", "A+", "A", "B+", "B", "C+", "C", "D+", "D", "F");
    while(1){
        printf("성적을 입력하세요 (0 ~ 100) : ");
        scanf("%d", &score);
        if ((score<=100)&&(score>=0)){
            if (score>=95) printf("학점은 A+ 입니다.\n");
            else if (score>=90) printf("학점은 A 입니다.\n");
            else if (score>=85) printf("학점은 B+ 입니다.\n");
            else if (score>=80) printf("학점은 B 입니다.\n");
            else if (score>=75) printf("학점은 C+ 입니다.\n");
            else if (score>=70) printf("학점은 C 입니다.\n");
            else if (score>=65) printf("학점은 D+ 입니다.\n");
            else if (score>=60) printf("학점은 D 입니다.\n");
            else if (score>=0) printf("학점은 F 입니다.\n");
        }
        else if (score==999) {
            printf("학점 프로그램을 종료합니다.");
            break;
        } 
        else printf("** %d 성적을 올바르게 입력하세요. 범위는 0 ~ 100입니다.\n", score);
    }
    return 0;
}