document.addEventListener('DOMContentLoaded', function() {

    const config = {
        curvesNum: 6,
        waveSpeed: 0.1,
        wavesToBlend: 10,
        framesToMove: 120,
    };

    class WaveNoise {
        constructor() {
            this.wavesSet = [];
        }
        addWaves(requiredWaves) {
            for (let i = 0; i < requiredWaves; ++i) {
                let randomAngle = Math.random() * 360;
                this.wavesSet.push(randomAngle);
            }
        }
        getWave() {
            let blendedWave = 0;
            for (let e of this.wavesSet) {
                blendedWave += Math.sin((e / 180) * Math.PI);
            }
            return (blendedWave / this.wavesSet.length + 1) / 2;
        }
        update() {
            this.wavesSet.forEach((e, i) => {
                let r = Math.random() * (i + 1) * config.waveSpeed;
                this.wavesSet[i] = (e + r) % 360;
            });
        }
    }


    class Animation {
        constructor() {
            this.cnv = null;
            this.ctx = null;
            this.size = { w: 0, h: 0, cx: 0, cy: 0 };
            this.controls = [];
            this.controlsNum = 3;
        }
        init() {
            this.createCanvas();
            this.createControls();
            this.updateAnimation();
        }
        createCanvas() {
            this.cnv = document.createElement("canvas");
            this.cnv.classList.add('canvas_animate');
            this.ctx = this.cnv.getContext("2d");
            this.setCanvasSize();
            document.getElementById("animationContainer").appendChild(this.cnv);
            window.addEventListener(`resize`, () => this.setCanvasSize());
        }
        setCanvasSize() {
            this.size.w = this.cnv.width = 600;
            this.size.h = this.cnv.height = 500;
            this.size.cx = this.size.w / 2;
            this.size.cy = this.size.h / 2;
        }
        createControls() {
            for (let i = 0; i < this.controlsNum + config.curvesNum; ++i) {
                let control = new WaveNoise();
                control.addWaves(config.wavesToBlend);
                this.controls.push(control);
            }
        }
        updateControls() {
            this.controls.forEach((e) => e.update());
        }

        updateCurves() {
            let c = this.controls;
            let _controlX1 = c[0].getWave() * this.size.w;
            let _controlY1 = c[1].getWave() * this.size.h;
            let _controlX2 = c[2].getWave() * this.size.w;

            for (let i = 0; i < config.curvesNum; ++i) {
                let _controlX3 = c[3 + i].getWave();
                let _controlY2 = c[2 + i].getWave();
                let curveParam = {
                    startX: -100,
                    startY: this.size.h * 1.1 - 30 * i,
                    controlX1: 700,
                    controlY1: _controlY2 * this.size.h,
                    controlX2: _controlX3 * this.size.w * 1.4,
                    controlY2: _controlY2 * this.size.h,
                    endX: this.size.w - 70 * i,
                    endY: -1000,
                    alpha: config.curvesNum / 10 - i / 10,
                    hue: 1000 / config.curvesNum - i * 10,
                };

                this.drawCurve(curveParam);
            }
        }
        drawCurve({
                      startX,
                      startY,
                      controlX1,
                      controlY1,
                      controlX2,
                      controlY2,
                      endX,
                      endY,
                      alpha,
                      hue,
                  }) {
            this.ctx.lineWidth = 2;
            this.ctx.strokeStyle = `hsla(${hue}, 100%, 30%, ${alpha})`;
            this.ctx.beginPath();
            this.ctx.moveTo(startX, startY);
            this.ctx.bezierCurveTo(
                controlX1,
                controlY1,
                controlX2,
                controlY2,
                endX,
                endY,
            );
            this.ctx.stroke();
        }
        updateCanvas() {
            this.ctx.fillStyle = `#fff`;
            this.ctx.fillRect(0, 0, this.size.w, this.size.h);
        }
        updateAnimation() {
            this.updateCanvas();
            this.updateCurves();
            this.updateControls();

            window.requestAnimationFrame(() => this.updateAnimation());
        }
    }

    window.onload = () => {
        new Animation().init();
    };


    const hamburgMenu = document.getElementById('hamburg-menu');

    hamburgMenu.addEventListener('click', function() {
        this.classList.toggle('open');
        document.querySelector('.menu-content').classList.toggle('open');
        document.body.classList.toggle('overflow-h')
    });

    const accordionItems = document.querySelectorAll('.accordion-item');

    accordionItems.forEach(item => {
        item.addEventListener('click', function(e) {
            e.preventDefault()
            this.classList.toggle('active');

            // Close other open accordion items
            accordionItems.forEach(otherItem => {
                if (otherItem !== item && otherItem.classList.contains('active')) {
                    otherItem.classList.remove('active');
                }
            });
        });
    });




});
  