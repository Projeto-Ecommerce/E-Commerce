3
4
5
6
7
8
9
10
11
12
13
14
15
16
17
18
19
20
21
22
23
24
25
26
27
28
29
30
31
32
33
34
35
36
37
38
39
40
41
42
43
44
45
46
47
48
49
50
51
52
53
54
55
56
57
58
59
60
61
62
63
64
65
66
67
68
69
70
71
72
73
74
75
76
77
78
79
80
81
82
83
84
85
86
87
88
89
90
91
92
93
94
95
96
97
98
<html><body>
<script language="javascript">
 
function nu(campo){
var digits="0123456789"
var campo_temp 
for (var i=0;i<campo.value.length;i++){
campo_temp=campo.value.substring(i,i+1) 
if (digits.indexOf(campo_temp)==-1){
campo.value = campo.value.substring(0,i);
break;
}
}
}
 
function ValRG(numero){
 /*
 ##  Igor Carvalho de Escobar
 ##    www.webtutoriais.com
 ##   Java Script Developer
 */
 var numero = numero.split("");
 tamanho = numero.length;
 vetor = new Array(tamanho);
 
if(tamanho>=1)
{
 vetor[0] = parseInt(numero[0]) * 2; 
}
if(tamanho>=2){
 vetor[1] = parseInt(numero[1]) * 3; 
}
if(tamanho>=3){
 vetor[2] = parseInt(numero[2]) * 4; 
}
if(tamanho>=4){
 vetor[3] = parseInt(numero[3]) * 5; 
}
if(tamanho>=5){
 vetor[4] = parseInt(numero[4]) * 6; 
}
if(tamanho>=6){
 vetor[5] = parseInt(numero[5]) * 7; 
}
if(tamanho>=7){
 vetor[6] = parseInt(numero[6]) * 8; 
}
if(tamanho>=8){
 vetor[7] = parseInt(numero[7]) * 9; 
}
if(tamanho>=9){
 vetor[8] = parseInt(numero[8]) * 100; 
}
 
 total = 0;
 
if(tamanho>=1){
 total += vetor[0];
}
if(tamanho>=2){
 total += vetor[1]; 
}
if(tamanho>=3){
 total += vetor[2]; 
}
if(tamanho>=4){
 total += vetor[3]; 
}
if(tamanho>=5){
 total += vetor[4]; 
}
if(tamanho>=6){
 total += vetor[5]; 
}
if(tamanho>=7){
 total += vetor[6];
}
if(tamanho>=8){
 total += vetor[7]; 
}
if(tamanho>=9){
 total += vetor[8]; 
}
 
 
 resto = total % 11;
if(resto!=0){
document.getElementById('camada').innerHTML="<font face=verdana size=2 color=red>RG Inválido!</font><br><br>";
}
else{
document.getElementById('camada').innerHTML="<font face=verdana size=2 color=forestgreen>RG Válido!</font><br><br>";
}
}
</script>
<div align=center id=camada></div>
<div align=center>
<input type="text" id="rg" onKeyUp="nu(this)"> <input type=button value='Validar RG' onClick="if(document.getElementById('rg').value != ''){ValRG(document.getElementById('rg').value)}else{alert('RG em branco')}"></div>
</body></html>