import { BrowserRouter,Routes,Route } from 'react-router-dom';
import { Show } from './components/Show';
import './App.css';


function App() {
  return (
    <main className="App">
        <BrowserRouter>
          <Routes>
            <Route path='/' element={<Show/>} />
          </Routes>
        </BrowserRouter>
        
    </main>
  );
}

export default App;
