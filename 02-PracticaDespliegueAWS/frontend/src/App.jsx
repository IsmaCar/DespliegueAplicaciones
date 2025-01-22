import { useEffect, useState } from 'react';
function App() {
 const [message, setMessage] = useState('');
 useEffect(() => {
 fetch('/api/ini')
 .then((response) => response.text())
 .then((data) => setMessage(data));
 }, []);
 return (
 <div>
 <h1>Frontend en React de Ismael Carballo Martin</h1>
 <p>Esta aplicación se conecta al backend de Symfony pidiéndole una respuesta</p>
 <p>Backend response: {message}</p>
 </div>
 );
}
export default App;

