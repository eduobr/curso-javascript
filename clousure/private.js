const person = () =>{
    var saveName = "Name";
    return {
        getName: () => {
            return saveName;
        },
        setName: (name)=>{
            saveName = name;
        },
    }
};

const newPerson = person();
console.log(newPerson.getName());
newPerson.setName('Eduardo');
console.log(newPerson.getName());
