import { NextResponse } from "next/server";
export async function POST(req, res) {
    const url = process.env.NEXT_PUBLIC_BACKEND_URL + "/register";
    try {
        const { name, email, password } = await req.json();

        const a = await fetch(url, {
            method: "POST",
            headers: {
                "Content-Type": "application/json",
            },
            body: JSON.stringify({ name, email, password }),
        });
        return NextResponse.json({ status: 200, message: "success", msg: a });
    } catch (e) {
        console.log(e);
        return NextResponse.json(
            { message: "Something went wrong", messagse: url },

            { status: 500 }
        );
    }
}
