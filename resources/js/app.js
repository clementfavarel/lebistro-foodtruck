import './bootstrap';

import Alpine from 'alpinejs';

window.Alpine = Alpine;

Alpine.start();

import Chart from 'chart.js/auto';

document.addEventListener('DOMContentLoaded', function () {
    const ctx = document.getElementById('userGrowthChart').getContext('2d');
    const labels = JSON.parse(ctx.canvas.dataset.labels);
    const counts = JSON.parse(ctx.canvas.dataset.counts);

    // Calculate the max count and add 10% more as the y-axis max
    const maxCount = Math.max(...counts);
    const yAxisMax = Math.ceil(maxCount * 1.1); // 10% more than max count

    new Chart(ctx, {
        type: 'line',
        data: {
            labels: labels,
            datasets: [{
                label: 'User Registrations',
                data: counts,
                borderColor: 'rgba(75, 192, 192, 1)',
                borderWidth: 2,
                fill: false
            }]
        },
        options: {
            responsive: true,
            scales: {
                y: {
                    beginAtZero: true,
                    max: yAxisMax  // Set the max value to 10% more than the highest count
                }
            }
        }
    });
});
