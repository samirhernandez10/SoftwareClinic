function calculateDailyValue() {
    const salarioInput = document.getElementById('valor');
    const valorDiarioInput = document.getElementById('valor_diario');
    const salario = parseFloat(salarioInput.value);

    if (!isNaN(salario)) {
        const valorDiario = salario / 30;
        valorDiarioInput.value = valorDiario.toFixed(2); // Redondeamos a 2 decimales
    } else {
        valorDiarioInput.value = '';
    }
}
