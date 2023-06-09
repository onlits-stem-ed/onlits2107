#include <stdio.h>
#include <stdlib.h>

typedef struct node
{
    int data;
    struct node *next;
} NODE;

NODE *head = NULL;

void create();
void traverse();

int main(void)
{
    int ch;
    while (1)
    {
        printf("MAIN MENU\n");
        printf("1. Display\n");
        printf("2. Insert\n");
        printf("Enter choice (0 to exit): ");
        scanf("%d", &ch);
        switch (ch)
        {
        case 0:
            exit(0);
            break;
        case 1:
            traverse();
            break;
        case 2:
            create();
            break;
        default:
            printf("\nInvalid option!\n\n");
        }
    }
    return 0;
}

void create()
{
    if (head == NULL)
    {
        head = (NODE *)malloc(sizeof(NODE));
        printf("\nEnter a value: ");
        scanf("%d", &head->data);
        head->next = NULL;
        printf("\nNode Created!\n\n");
        return;
    }

    NODE *itr = head;
    while (itr->next != NULL)
        itr = itr->next;

    itr->next = (NODE *)malloc(sizeof(NODE));
    printf("\nEnter a value: ");
    scanf("%d", &itr->next->data);
    itr->next->next = NULL;
    printf("\nNode Created!\n\n");
}

void traverse()
{
    if (head == NULL)
    {
        printf("\nList empty. Nothing to display!\n\n");
        return;
    }

    NODE *itr = head;
    while (1)
    {
        printf("%d\n", itr->data);
        if (itr->next == NULL)
            break;
        itr = itr->next;
    }
}