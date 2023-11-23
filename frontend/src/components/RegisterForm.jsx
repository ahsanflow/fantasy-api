// RegisterForm.js
"use client";
import { useEffect, useState } from "react";
import { Paper, Grid, Stack, TextField, Button } from "@mui/material";
import BaseCard from "../app/dashboard/components/BaseCard";
import { createTheme, ThemeProvider, styled } from "@mui/material/styles";

const darkTheme = createTheme({ palette: { mode: "dark" } });
const lightTheme = createTheme({ palette: { mode: "light" } });

const RegisterForm = () => {
    const [loading, setLoading] = useState(false);
    const [toast, setToast] = useState(false);
    const [err, setErr] = useState(false);
    const message =
        toast && !err
            ? "Your registration was successful."
            : "An error occurred while processing your request.";
    const [formData, setFormData] = useState({
        name: "",
        email: "",
        password: "",
        confirmPassword: "",
    });

    const [errors, setErrors] = useState({});

    const handleChange = (e) => {
        setFormData({
            ...formData,
            [e.target.id]: e.target.value,
        });
    };

    const handleSubmit = async (e) => {
        e.preventDefault();

        // Basic form validation
        const newErrors = {};
        if (!formData.name.trim()) {
            newErrors.name = "Name is required";
        }
        if (!formData.email.trim()) {
            newErrors.email = "Email is required";
        }
        if (!formData.password.trim()) {
            newErrors.password = "Password is required";
        }
        if (formData.password !== formData.confirmPassword) {
            newErrors.confirmPassword = "Passwords do not match";
        }

        // If there are errors, update the state and return
        if (Object.keys(newErrors).length > 0) {
            setErrors(newErrors);
            return;
        }
        console.log("no error");
        const url = process.env.NEXT_PUBLIC_BACKEND_URL + "/register";
        try {
            setErr(false);
            setToast(false);
            const response = await fetch(url, {
                method: "POST",
                headers: { "Content-Type": "application/json" },
                body: JSON.stringify(formData),
            });
            const res = await response.json();
            console.log(res);
            if (res.status) {
                setToast(true);
            }
            setLoading(false);
        } catch (e) {
            console.log(e);
            setErr(true);
            setToast(true);
        }

        // If no errors, you can submit the form data
        console.log("Form submitted:", formData);
        // Add your logic for form submission (e.g., API call)
    };
    useEffect(() => {
        if (setToast) {
            const timer = setTimeout(() => {
                setToast(false);
                setErr(false);
            }, 5000);

            return () => {
                clearTimeout(timer);
            };
        }
    }, [toast]);

    return (
        <Grid container spacing={3}>
            {toast && (
                <div
                    className={`flex justify-between py-4 px-8 ${
                        err
                            ? "bg-[#fad2e1]  text-[#7c193d]"
                            : "bg-[#98f5e1]  text-[#236c5b"
                    }]`}
                >
                    <p className="font-sans">{message}</p>
                    <button className="font-bold">&#10005;</button>
                </div>
            )}
            <Grid item xs={12} lg={12}>
                <BaseCard title="Registration Form">
                    <>
                        <form onSubmit={handleSubmit}>
                            <Stack spacing={3}>
                                <TextField
                                    id="name"
                                    label="Name"
                                    variant="outlined"
                                    fullWidth
                                    value={formData.name}
                                    onChange={handleChange}
                                    error={!!errors.name}
                                    helperText={errors.name}
                                />
                                <TextField
                                    id="email"
                                    label="Email"
                                    variant="outlined"
                                    fullWidth
                                    value={formData.email}
                                    onChange={handleChange}
                                    error={!!errors.email}
                                    helperText={errors.email}
                                    autoComplete="username"
                                />
                                <TextField
                                    id="password"
                                    label="Password"
                                    type="password"
                                    variant="outlined"
                                    fullWidth
                                    value={formData.password}
                                    onChange={handleChange}
                                    error={!!errors.password}
                                    helperText={errors.password}
                                    autoComplete="new-password"
                                />
                                <TextField
                                    id="confirmPassword"
                                    label="Confirm Password"
                                    type="password"
                                    variant="outlined"
                                    fullWidth
                                    value={formData.confirmPassword}
                                    onChange={handleChange}
                                    error={!!errors.confirmPassword}
                                    helperText={errors.confirmPassword}
                                    autoComplete="new-password"
                                />
                            </Stack>
                            <br />
                            <Button
                                type="submit"
                                variant="contained"
                                color="primary"
                            >
                                Register
                            </Button>
                        </form>
                    </>
                </BaseCard>
            </Grid>
        </Grid>
    );
};

export default RegisterForm;
