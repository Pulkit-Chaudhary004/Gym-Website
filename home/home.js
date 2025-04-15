fetch('https://dummyjson.com/test')
.then((res)=> res.json() 
) 
.then((data)=>{  console.log(data)
})

