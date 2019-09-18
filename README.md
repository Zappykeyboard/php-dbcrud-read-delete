# php-dbcrud-read-delete
Esercizio Boolean per il 18 Settembre 2019



Generare in un nuovo progetto la grafica necessaria per stampare i pagamenti presenti nel DB. I pagamenti dovranno essere in 3 zone (grafiche) diverse in base allo status, es:

REJECTED:
- pag 1
- pag 2

PENDING:
- pag 3
- pag 4

ACCEPTED:
- pag 5
- pag 6

Dovra' inoltre essere data all'utente la possibilita' di eliminare un elemento attraverso la pagina. Il software dovra' provvedere a eliminare il record dalla tabella e aggiornare la grafica realtiva senza ricaricare la pagina (come visto a lezione).

OPZIONALE: 
Utilizzare Handlebars per generare graficamente gli elementi

TABELLA DI RIFERIMENTO: pagamenti
QUERY PER INSERIMENTO DATI PRIVI DI VINCOLI: 

INSERT INTO pagamenti (id, status, price, prenotazione_id, pagante_id) 
VALUES 
  (100, 'pending', 300, 1, 6), 
  (101, 'pending', 545, 13, 16), 
  (102, 'rejected', 120, 1, 1), 
  (103, 'rejected', 1000, 7, 6), 
  (104, 'accepted', 1200, 25, 29), 
  (105, 'accepted', 980, 13, 4)

QUERY PER IL DOWNLOAD DEI SOLI DATI LIBERI DA VINCOLI:

SELECT * 
FROM pagamenti
WHERE id >= 100