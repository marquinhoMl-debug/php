<?php
    namespace Projeto\Exercicios\funcoesPhp;
 
    Class Funcoes{
        private float $num1;
        private float $num2;
        private float $resultado;
 
        //Criando um construtor = instância as variáveis -> Cria as variáveis na memória do servidor
        public function __construct(){
            $this->$num1;
            $this->$num2;
            $this->$resultado;
        }//fim do construtor
 
        //Métodos de acesso e modificadores
        public function __get(string $dado):mixed
        {
            return $this->$dado;
        }//fim do get
 
        public function __set(string $variavel, string $novoDado):void
        {
            $this->variavel = $novoDado;
        }//fim do set
 
        public function SomarDoisNumeros(float $num1, float $num2){
            $this->resultado = $num1 + $num2;
            return $this->resultado;
        }//fim do método Somar
 
        public function SubtrairDoisNumeros(float $num1, float $num2){
            $this->resultado = $num1 - $num2;
            return $this->resultado;
        }//fim do método Subtrair
 
        public function MultiplicarDoisNumeros(float $num1, float $num2){
            $this->resultado = $num1 * $num2;
            return $this->resultado;
        }//fim do método Multiplicar
 
        public function DividirDoisNumeros(float $num1, float $num2){
            if($num2 <= 0){
                return "Impossível dividir por zero!";
            }else{
                $this->resultado = $num1 / $num2;
                return $this->resultado;
            }
        }//fim do método Dividir
 
        public function delta(int $a, int $b, int $c){
            $delta = pow($b,2)-4*$a*$c;
            return $delta;
        }//fim do Delta
 
        public function calcularX1X2(int $a, int $b, int $c){
            $del = $this->delta($a,$b,$c);
            if(del < 0){
                return "Impossível calcular X1 e X2, delta nagativo!";
            }else{
                $x1 = (-$b + sqrt($del))/2*$a;
                $x2 = (-$b - sqrt($del))/2*$a;
                return "X1 = $x1 <br><br> X2 = $x2";
            }
        }//fim do método Bhaskara

        public function dobro(float $num1){
            $this->resultado = $num1 * 2;
            return $this->resultado;
        }//fim do método Dobro de um Número

        public function MediaNumeros (float $num1, float $num2, float $num3){
            $media = ($num1 + $num2 + $num3) / 3;
            return $media;
        }//fim do método Média entre Três Números

        public function RaizQuadrada (int $num1){
            $raiz = sqrt($num1);
            return $raiz;
        }//fim do método Raiz Quadrada

        public function MetrosParaCm (float $num1){
            $centimetros = $num1 * 100;
            return $centimetros;
        }//fim do método Metros para Centímetros

        public function AreaCirculo (float $num1){
            $area = M_PI * pow($num1, 2);
            return $area;
        }//fim do método Área de um Círculo

        public function celsiusParaFahrenheit(float $num1): float {
            $fahrenheit = ($num1 * 9 / 5) + 32;
            return $fahrenheit;
        }//fim do método Celsius para Fahrenheit
 
        public function desconto(float $precoOriginal): float {
            $precoComDesconto = $precoOriginal * 0.90;
            return $precoComDesconto;
        }//fim do método Desconto
 
        public function anosParaMeses($anos) {
            return $anos * 12;
        }//fim do método Anos para Meses
 
        public function parImpar(int $num1): string {
            if ($num1 % 2 === 0) {
                return "Este número é par.";
            }else{
                return "Este número é ímpar.";
            }//fim do if
        }//fim do método Par e Ímpar
 
        public function triangulo(float $base, float $altura) {
            $area = ($base * $altura) / 2;
            return $area;
        }//fim do método triangulo





        public function crescente(int $num1): string{
            if ($num1 <= 0) {
                return "Por favor, informe um número inteiro positivo.";
            }//fim do if
 
            $sequencia = "";
 
            for ($i = 1; $i <= $num1; $i++){
                $sequencia .= $i . " ";
            }//fim do for
 
            return $sequencia;
        }//fim do método Ordem Crescente
 
        public function regressiva(int $num1): string{
            if ($num1 <= 0){
                return "Por favor, informe um número inteiro positivo.";
            }//fim do if
 
            $sequencia = "";
 
            for ($i = $num1; $i >= 1; $i--){
                $sequencia .= $i . " ";
            }//fim do for
 
            return $sequencia;
        }//fim do método Ordem Regressiva
 
        public function somarInteiros(int $num1): int|string{
            if ($num1 <= 0) {
                return "Por favor, informe um número inteiro positivo.";
            }//fim do if
 
            $soma = 0;
 
            for ($i = 1; $i <= $num1; $i++){
                $soma += $i;
            }//fim do for
 
            return $soma;
        }//fim do método Somar Inteiros
 
        public function multiplos(): string{
            $sequencia = "";
 
            for ($i = 1; $i <= 100; $i++) {
               
                if ($i % 7 == 0) {
                    $sequencia .= $i . " ";
                }//fim do if
            }//fim do for
 
            return $sequencia;
        }// fim do método Múltiplos de 7
 
        public function pares(): string{
            $sequencia = "";
       
            for ($i = 1; $i <= 20; $i++) {
                if ($i % 2 == 0) {
                    $sequencia .= $i . " ";
                }//fim do if
            }//fim do for
 
            return $sequencia;
        }//fim do método Pares entre 20 Números
 
        public function notasAlunos(array $notas): string {
            $soma = 0;
            $quantidade = count($notas);
 
            if ($quantidade == 0){
                return "Nenhuma nota informada.";
            }//fim do if
 
            for ($i = 0; $i < $quantidade; $i++){
                $soma += (float)$notas[$i];
            }//fim do for
 
            $media = $soma / $quantidade;
            $mediaFormatada = number_format($media, 2, ',', '.');
 
            if ($media >= 7.0){
                return "Média: {$mediaFormatada} - Situação: Aprovado";
            }elseif ($media >= 5.0 && $media < 7.0){
                return "Média: {$mediaFormatada} - Situação: Em Recuperação";
            }else{
                return "Média: {$mediaFormatada} - Situação: Reprovado";
            }//fim do if
        }//fim do método Notas de Alunos
 
        public function mediaTemperaturas($t1, $t2, $t3, $t4, $t5, $t6, $t7){
            $temperaturas = [$t1, $t2, $t3, $t4, $t5, $t6, $t7];
            $soma = 0;
            $acimaDe30 = 0;
            $total = count($temperaturas);
 
            for ($i = 0; $i < $total; $i++) {
                $tempAtual = floatval($temperaturas[$i]);
                $soma += $tempAtual;
 
                if ($tempAtual > 30) {
                    $acimaDe30++;
                }//fim do for
            }//fim do for
 
            $media = $soma / $total;
            $mediaFormatada = number_format($media, 2, ',', '.');
 
            return "A média das temperaturas é: {$mediaFormatada} °C.<br>" .
                "Quantidade de dias acima de 30 °C: {$acimaDe30} dia(s).";
        }//fim do método Média de Temperaturas
 
        public function impares(int $n): string{
 
            if ($n < 1) {
                return "Por favor, informe um número inteiro maior ou igual a 1.";
            }//fim do if
 
            $somaImpares = 0;
 
            for ($i = 1; $i <= $n; $i++) {
                if ($i % 2 != 0) {
                    $somaImpares += $i;
                }//fim do if
            }//fim do for
 
            return "A soma dos números ímpares entre 1 e $n é: $somaImpares";
        }//fim do método Soma dos Números Ímpares
 
        public function fatorial(int $numero): string{
 
            if ($numero < 0){
                return "Erro: Informe um número inteiro não negativo.";
            }//fim do if
 
            $fatorial = 1;
 
            for ($i = $numero; $i > 1; $i--){
                $fatorial *= $i;
            }//fim do for
 
            return "O fatorial de $numero é: $fatorial";
        }//fim do método Fatorial
 
        public function somaQuadrados(int $numero): string {
           
        $soma = 0;
 
            for ($i = 1; $i <= $numero; $i++) {
                $quadrado = $i ** 2;
                $soma += $quadrado;
            }//fim do for
 
            return "A soma dos quadrados de 1 até $numero é: $soma";
        }//fim do método Soma de Quadrados







}