import React from 'react';
import { Star, StarOff, StarHalf } from 'lucide-react'; // Import additional Star components for half-stars



export function ProductSection({ products }) {
    console.log('products', products);

    return (
        <section className="py-16 bg-white">
            <div className="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                <h2 className="text-3xl font-bold text-gray-900 mb-8">Featured Products</h2>
                <div className="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-8">
                    {products.map((product) => (
                        <div
                            key={product.id}
                            className="group bg-gray-50 rounded-lg overflow-hidden shadow-lg hover:shadow-xl transition-all duration-300"
                        >
                            <div className="relative overflow-hidden h-64">
                                {/* Default Image */}
                                <img
                                    src={product.images[0].image_path} // First image
                                    alt={`${product.name} - Default Image`}
                                    className="w-full h-full object-cover absolute top-0 left-0 transition-opacity duration-300 group-hover:opacity-0"
                                />
                                {/* Hover Image */}
                                <img
                                    src={product.images[1]?.image_path} // Second image
                                    alt={`${product.name} - Hover Image`}
                                    className="w-full h-full object-cover absolute top-0 left-0 opacity-0 transition-opacity duration-300 group-hover:opacity-100"
                                />
                            </div>
                            <div className="p-4">
                                <h3 className="text-lg font-semibold text-gray-900">{product.name}</h3>
                                <p className="mt-1 text-lg font-medium text-indigo-600">${product.price}</p>
                            </div>
                        </div>
                    ))}
                </div>
            </div>
        </section>
    );
}
