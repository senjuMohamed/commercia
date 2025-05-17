import './bootstrap';
import React from 'react';
import { createRoot } from 'react-dom/client';
import { BrowserRouter as Router, Routes, Route } from 'react-router-dom';
import { CSSTransition, TransitionGroup } from 'react-transition-group';

// Components
const App = () => {
    return (
        <Router>
            <TransitionGroup>
                <CSSTransition timeout={300} classNames="fade">
                    <Routes>
                        <Route path="/" element={<div>Home Page</div>} />
                        <Route path="/products" element={<div>Products Page</div>} />
                        <Route path="/contact" element={<div>Contact Page</div>} />
                    </Routes>
                </CSSTransition>
            </TransitionGroup>
        </Router>
    );
};

const container = document.getElementById('app');
const root = createRoot(container);
root.render(<App />);