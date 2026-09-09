import os
import subprocess
import sys

def run_command(command, description):
    print(f"[*] {description}...")
    try:
        # We use shell=True and capture output
        result = subprocess.run(command, shell=True, check=True, stdout=subprocess.PIPE, stderr=subprocess.STDOUT, text=True)
        print(result.stdout)
    except subprocess.CalledProcessError as e:
        print(f"[!] Error ejecutando: {description}")
        print(e.stdout)
        if "nothing to commit" in e.stdout or "nada" in e.stdout.lower():
            print("[*] No hay cambios nuevos para comitear. Continuando...")
        else:
            sys.exit(1)

def main():
    # 1. Run export_static.py
    run_command("python scripts/export_static.py", "Ejecutando exportacion estatica")
    
    # 2. Git add
    run_command("git add .", "Agregando archivos a Git")
    
    # 3. Git commit
    # Git commit returns 1 if there is nothing to commit, which is caught by our try/except block
    run_command('git commit -m "Auto-deploy desde WordPress admin"', "Creando commit")
    
    # 4. Git push
    run_command("git push origin main", "Subiendo cambios a Vercel (Push)")
    
    print("\\n[SUCCESS] Despliegue iniciado correctamente. Vercel compilara los cambios pronto.")

if __name__ == "__main__":
    main()
