#include <stdio.h>

int main(void){
    int score;
    printf("���� ���α׷�\n���Ḧ ���ϸ� '999'�� �Է�\n[���� ���̺�]\n");
    printf("���� : %10d %10d %10d %10d %10d %10d %10d %10d %10d\n", 95, 90, 85, 80, 75, 70, 65, 60, 0);
    printf("���� : %10s %10s %10s %10s %10s %10s %10s %10s %10s\n", "A+", "A", "B+", "B", "C+", "C", "D+", "D", "F");
    while(1){
        printf("������ �Է��ϼ��� (0 ~ 100) : ");
        scanf("%d", &score);
        if ((score<=100)&&(score>=0)){
            if (score>=95) printf("������ A+ �Դϴ�.\n");
            else if (score>=90) printf("������ A �Դϴ�.\n");
            else if (score>=85) printf("������ B+ �Դϴ�.\n");
            else if (score>=80) printf("������ B �Դϴ�.\n");
            else if (score>=75) printf("������ C+ �Դϴ�.\n");
            else if (score>=70) printf("������ C �Դϴ�.\n");
            else if (score>=65) printf("������ D+ �Դϴ�.\n");
            else if (score>=60) printf("������ D �Դϴ�.\n");
            else if (score>=0) printf("������ F �Դϴ�.\n");
        }
        else if (score==999) {
            printf("���� ���α׷��� �����մϴ�.");
            break;
        } 
        else printf("** %d ������ �ùٸ��� �Է��ϼ���. ������ 0 ~ 100�Դϴ�.\n", score);
    }
    return 0;
}