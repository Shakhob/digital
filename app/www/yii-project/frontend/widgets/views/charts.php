<section class="charts">
    <div class="container">
        <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.3/Chart.min.js"></script>
        <div class="section_header">
            <div class="section_title">
                <?=Yii::t('app','Uzbekistan\'s position')?>
            </div>
            <div class="text">
                <?=Yii::t('app','in the Development Index are headed by the <br> UN government')?>
            </div>
        </div>
        <div class="mobile_overflow">
            <div class="chart_container">
                <div class="chart">
                    <div id="labels-container"></div>
                    <canvas id="myChart"
                            width="900"
                            height="328"
                            aria-label="Hello ARIA World"
                            role="img"></canvas>
                </div>
                <?php if(!empty($models)): ?>
                    <?php foreach ($models as $model): ?>
                        <?
                            $year[] = $model->year;
                            $position[] = $model->position;
                        ?>
                    <?php endforeach; ?>
                <?php endif; ?>
                <?
                    $place= Yii::t('app','place');
                ?>
            </div>
            <div class="mobile_chart_bg">
                <img src="images/hero_left_mobile.png" alt="">
            </div>
        </div>
    </div>
</section>
<script>
    var ctx = document.getElementById('myChart').getContext('2d');
    var place = <?= json_encode($place) ?>;
    var chart = new Chart(ctx, {
        type: 'line',
        data: {
            labels: <?= json_encode($year) ?>,
            datasets: [
                {
                    label: "# of Votes",
                    data: <?= json_encode($position) ?>,
                    borderWidth: 1,
                    borderColor: '#52B8DE',
                    backgroundColor: 'rgba(0, 0, 0, 0)',
                    pointRadius: 8,
                    pointBackgroundColor: '#52B8DE',
                    pointHoverRadius: 8,
                    pointHoverBackgroundColor: '#52B8DE',
                    pointLabelFontColor: 'red',
                    pointLabelFontSize: 14,
                },
            ],
        },
        options: {
            legend: {
                display: false
            },
            tooltips: {
                enabled: false // Отключение Tooltip
            },
            maintainAspectRatio: false,
            scales: {
                xAxes: [{
                    ticks: {
                        fontColor: '#090A0D',
                        fontSize: 24, // Устанавливаем размер шрифта
                        fontFamily: 'Inter', //
                        lineHeight: 29,
                    },
                    gridLines: {
                        display: false,
                        color: 'rgba(0, 0, 0, 0)',
                        border: {
                            dash: [2, 4],
                        },
                        lineWidth: 1,
                    }
                }],
                yAxes: [{
                    display: false,
                    gridLines: {
                        zeroLineWidth: 1,
                        zeroLineColor: 'red',
                        display: false
                    },
                    ticks: {
                        reverse: true,
                        beginAtZero: true,
                        max: 105,
                        min: 60,
                    }
                }]
            },
            elements: {
                line: {
                    tension: 0
                }
            },
            cornerRadius: 0,
            plugins: {
                tooltip: {
                    mode: 'nearest' // Отключение Tooltip
                }
            },
            interaction: {
                mode: 'index',
                intersect: false,
            }
        },
        plugins: [{
            afterRender: function(c, options) {
                let meta = c.getDatasetMeta(0),
                    max = Math.max(...c.config.data.datasets[0].data);
                let labelsContainer = document.getElementById('labels-container');
                labelsContainer.innerHTML = ''; // Очищаем контейнер перед добавлением новых меток
                meta.data.forEach(function(e, index) {
                    // Добавляем метку для каждой точки данных
                    let label = document.createElement('div');
                    label.classList.add('label');
                    label.textContent = c.config.data.datasets[0].data[index]+ " " + place;
                    label.style.left = e._model.x - 40 + 'px';
                    label.style.top = e._model.y - 35 + 'px';
                    label.style.fontSize = 16 + 'px';
                    labelsContainer.appendChild(label);
                });
                c.ctx.save();
                c.ctx.strokeStyle = '#808181';
                c.ctx.setLineDash([5, 5]);
                c.ctx.lineWidth = c.config.options.scales.xAxes[0].gridLines.lineWidth;
                c.ctx.beginPath();
                meta.data.forEach(function(e) {
                    c.ctx.moveTo(e._model.x, meta.dataset._scale.bottom);
                    c.ctx.lineTo(e._model.x, e._model.y+ 10);
                });
                c.ctx.textBaseline = 'top';
                c.ctx.textAlign = 'white';
                c.ctx.fillStyle = 'white';
                c.ctx.fillText('Max value: ' + max, c.width - 10, 10);
                c.ctx.stroke();
                c.ctx.restore();
            }
        }]
    });
</script>