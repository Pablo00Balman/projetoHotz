#include"stdio.h"

void main(int argc, char const *argv[])
{
    FILE * entrada;
    FILE * sql;
    char cpf[15];
    char epoch[15];
    char ind[15];

    for (int i = 1; i < argc; i++)
    {
        entrada = fopen(argv[1], "r");  
        sql = fopen("/home/pablo/Laravel/projetoHotz/cardiaco.sql", "w");
        
        printf("Inserindo registros do arquivos %d...\n", i);

        while(fscanf(entrada, "%s", cpf) != -1)
        {
            fscanf(entrada, "%s", epoch);
            fscanf(entrada, "%s", ind);
    
            if(cpf[0] != 'C')
                fprintf(sql,"('%s', %s, %s),\n", cpf, epoch, ind);                
        }
        fclose(sql);
        fclose(entrada);
    }
    printf("Processo finalizado.\n");
}