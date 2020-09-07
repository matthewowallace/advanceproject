const canvas = document.getElementById('logo-move');
const ctx = canvas.getContext('2d');
canvas.width = window.innerWidth;
canvas.height = window.innerHeight;
let particleArray = [];
let adjustX = 10;
let adjustY = 10;

//handle mouse move
const mouse ={
    x:null,
    y:null,
    radius: 95
}

window.addEventListener('mousemove', function(event){
    mouse.x = event.x;
    mouse.y = event.y;
})

ctx.fillStyle = 'white';
ctx.font = '20px Oxanium';
ctx.fillText('WHO WE ARE', 0, 30);
const TextCoordinates = ctx.getImageData(0,0,200,200);


class Particle{
    constructor(x, y){
        this.x = x;
        this.y = y;
        this.size = 2;
        this.baseX = this.x;
        this.baseY= this.y;
        this.density = (Math.random() * 30) + 5;
    }

    draw(){
        // ctx.strokeStyle = 'rgba(150,230,170,0.6)';
        // ctx.lineWidth = 2;
        ctx.fillStyle = '#5D8AA8';
        ctx.beginPath();
        ctx.arc(this.x, this.y, this.size, 0, Math.PI * 2);
        ctx.closePath();
        ctx.fill();
       // ctx.stroke();
    }
    update(){
        let dx = mouse.x - this.x;
        let dy = mouse.y - this.y;
        let distance = Math.sqrt(dx * dx + dy * dy);
        let forceDirectionX = dx/distance;
        let forceDirectionY = dy/distance;
        let maxDistance = mouse.radius;
        let force = (maxDistance - distance) / maxDistance;
        let directionX = forceDirectionX * force * this.density;
        let directionY = forceDirectionY * force * this.density;


        if(distance < 150){
            this.x -= directionX;
            this.y -= directionY;
        }else{
            if(this.x !== this.baseX){
                let dx = this.x - this.baseX;
                this.x -= dx/25;
            }
            if(this.x !== this.baseY){
                let dy = this.y - this.baseY;
                this.y -= dy/30;
            }
        }

    }
}

function init(){
    particleArray = [];
    // for(let i = 0; i < 1000; i++){
    //     let x = Math.random() * canvas.width;
    //     let y = Math.random() * canvas.height;
    //     particleArray.push(new Particle(x, y));
    // }

    for(let y = 0, y2 = TextCoordinates.height; y < y2; y++){
        for( let x = 0, x2= TextCoordinates.width; x < x2; x++ ){
            if(TextCoordinates.data[(y * 4 * TextCoordinates.width) + (x * 4) + 3] > 128){
                let positionX = x + adjustX;
                let positionY = y + adjustY;
                particleArray.push(new Particle(positionX * 15, positionY * 15))
            }
        }
    }
}

init();
// console.log(particleArray);

function animate(){
        ctx.clearRect(0,0, canvas.width, canvas.height);
        for(let i = 0; i < particleArray.length; i++){
            particleArray[i].draw();
            particleArray[i].update();
        }
        connect();
        requestAnimationFrame(animate);
}
animate();

function connect(){
    let opacityValue = 1;
    for(let a = 0; a < particleArray.length; a++){
        for(let b = a; b < particleArray.length; b++ ){
            let dx = particleArray[a].x - particleArray[b].x;
            let dy = particleArray[a].y - particleArray[b].y;
            let distance = Math.sqrt(dx * dx + dy * dy);
            if( distance < 15){
                 opacityValue = 1 - (distance/0.8);
                 ctx.strokeStyle = 'rgba(255,255,255,' + opacityValue + ')';
                 ctx.strokeStyle = '#452c63';
                 ctx.lineWidth = 3;
                 ctx.beginPath();
                 ctx.moveTo(particleArray[a].x, particleArray[a].y);
                 ctx.lineTo(particleArray[b].x, particleArray[b].y);
                 ctx.stroke();
            }
        }
    }
}
